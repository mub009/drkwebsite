const select = document.getElementById("branchSelect");
const trigger = select.querySelector(".select-trigger");
const options = select.querySelectorAll(".option");
const input = document.getElementById("branchInput");

trigger.addEventListener("click", () => {
    select.classList.toggle("open");
});

options.forEach((option) => {
    option.addEventListener("click", () => {
        trigger.querySelector("span").textContent = option.textContent;
        input.value = option.dataset.value;
        select.classList.remove("open");
    });
});

document.addEventListener("click", (e) => {
    if (!select.contains(e.target)) {
        select.classList.remove("open");
    }
});

document
    .querySelector(".enquiry-form")
    .addEventListener("submit", function (e) {
        e.preventDefault();

        const form = this;
        const formData = new FormData(form);
        fetch(form.action, {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]',
                ).content,
            },
        })
            .then((res) => res.json())
            .then((data) => {
                if (data.status) {
                    showSuccessModal(data.message);
                    form.reset();
                    trigger.querySelector("span").textContent = "Select Branch";
                    input.value = "";
                } else {
                    alert(data.message);
                }
            })
            .catch((err) => {
                console.error(err);
                alert("Something went wrong!");
            });
    });

function showSuccessModal(message) {
    document.getElementById("successMessage").innerHTML = message;
    document.getElementById("bookingSuccess").style.display = "flex";

    setTimeout(hideSuccess, 5000);
}

function hideSuccess() {
    document.getElementById("bookingSuccess").style.display = "none";
}
