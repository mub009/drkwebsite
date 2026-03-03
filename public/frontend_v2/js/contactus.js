const branchSelect = document.getElementById("branchSelect");
const branchTrigger = branchSelect.querySelector(".select-trigger");
const branchOptions = branchSelect.querySelectorAll(".option");
const branchInput = document.getElementById("branchInput");

branchTrigger.addEventListener("click", () => {
    branchSelect.classList.toggle("open");
});

branchOptions.forEach((option) => {
    option.addEventListener("click", () => {
        branchOptions.forEach((o) => o.classList.remove("active"));
        option.classList.add("active");

        branchTrigger.querySelector("span").textContent = option.textContent;
        branchInput.value = option.dataset.value;

        branchSelect.classList.remove("open");
    });
});

document.addEventListener("click", (e) => {
    if (!branchSelect.contains(e.target)) {
        branchSelect.classList.remove("open");
    }
});

const serviceSelect = document.getElementById("serviceSelect");
const serviceTrigger = serviceSelect.querySelector(".select-trigger");
const serviceOptions = serviceSelect.querySelectorAll(".option");
const serviceInput = document.getElementById("serviceInput");

serviceTrigger.addEventListener("click", () => {
    serviceSelect.classList.toggle("open");
});

serviceOptions.forEach((option) => {
    option.addEventListener("click", () => {
        serviceOptions.forEach((o) => o.classList.remove("active"));
        option.classList.add("active");

        serviceTrigger.querySelector("span").textContent = option.textContent;
        serviceInput.value = option.dataset.value;

        serviceSelect.classList.remove("open");
    });
});

document.addEventListener("click", (e) => {
    if (!serviceSelect.contains(e.target)) {
        serviceSelect.classList.remove("open");
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
