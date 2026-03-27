<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnquiryRequest;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Article;
use App\Models\Offer;
use App\Models\Branch;
use App\Models\Enquiry;
use App\Models\Service;
use Carbon\Carbon;

class FrontEndController extends Controller
{

    public function home()
    {
        Carbon::setLocale(app()->getLocale());

        $data = [];
        if (app()->getLocale() == 'ar') {
            $data['meta_title']       = 'مستشفى د. خالد الرحيمي - رعاية طبية متقدمة';
            $data['meta_description'] = 'نقدم خدمات طبية وجراحية وتجميلية بأعلى معايير الجودة والخصوصية. احجز موعدك اليوم مع نخبة الأطباء.';
        } else {
            $data['meta_title']       = 'Dr. Khaled Al Ruhaimi Hospital - Advanced Care';
            $data['meta_description'] = 'Get top medical, surgical & cosmetic care with trusted doctors and modern technology. Book your appointment today';
        }

        $data['doctors'] = Doctor::join('departments', 'doctors.department', '=', 'departments.id')
            ->select(
                'doctors.*',
                'departments.department_ar',
                'departments.department_en'
            )
            ->where('doctors.frontpage', '=', 1)
            ->orderBy('sort', 'asc')
            ->get();

        $data['article'] = Article::latest()->take(4)->get();
        $data['department'] = Department::whereNotNull('department_ar')
            ->orderBy('sort', 'asc')
            ->get();
        $data['services'] = Service::all();
        $data['offers'] = Offer::where('with_carousel', 1)->get();
        return view('frontend_v2.index', $data);
    }

    public function blog()
    {
        Carbon::setLocale(app()->getLocale());

        $data = array();

        if (app()->getLocale() == 'ar') {
            $data['meta_title']       = 'مدونة الصحة والجمال - مستشفى د. خالد الرحيمي';
            $data['meta_description'] = ' اكتشف نصائح طبية وجمالية موثوقة، واطّلع على أحدث المقالات حول الصحة والعناية. اقرأ مدونتنا الآن.';
        } else {
            $data['meta_title']       = 'Health & Beauty Blog - Dr. Khaled Al Ruhaimi';
            $data['meta_description'] = ' Explore expert tips on health, beauty & wellness. Stay updated with trusted insights. Read our blog and learn more today';
        }

        $data['articles'] = Article::latest()->paginate(4);
        return view('frontend_v2.blog', $data);
    }
    public function doctorsinformation($id)
    {
        $doctor = Doctor::join('departments', 'doctors.department', '=', 'departments.id')
            ->select(
                'doctors.*',
                'departments.department_ar',
                'departments.department_en'
            )
            ->where('doctors.id', $id)
            ->firstOrFail();

        return view('frontend_v2.doctorsinformation', compact('doctor'));
    }

    public function offers()
    {
        Carbon::setLocale(app()->getLocale());

        $data = array();
        $data['offers'] = Offer::latest()->get();
        $data['services'] = Service::all();
        return view('frontend_v2.offers', $data);
    }


    public function appointment()
    {
        Carbon::setLocale(app()->getLocale());

        $data = array();
        $data['department'] = Department::whereNotNull('department_ar')
            ->orderBy('sort', 'asc')
            ->get();
        // $data['offers'] = Offer::latest()->paginate(4);
        return view('frontend_v2.appointment', $data);
    }



    public function articleDetails($slug = null)
    {
        Carbon::setLocale(app()->getLocale());

        $article = Article::where('slug', $slug)->firstOrFail();

        $articles = Article::where('id', '!=', $article->id)
            ->latest()
            ->take(3)
            ->get();

        return view('frontend_v2.blog_details', [
            'article' => $article,
            'articles' => $articles
        ]);
    }

    public function about()
    {
        $data = [];

        if (app()->getLocale() == 'ar') {
            $data['meta_title']       = 'عن مستشفى د. خالد الرحيمي';
            $data['meta_description'] = ' تعرف على رسالتنا وخدماتنا وأطبائنا المتميزين. اكتشف سبب ثقة المرضى بنا واحجز موعدك اليوم.';
        } else {
            $data['meta_title']       = 'About Dr. Khaled Al Ruhaimi Hospital';
            $data['meta_description'] = 'Learn about our mission, expert doctors & advanced medical care. Discover why patients trust us and book your visit today.';
        }

        return view('frontend_v2.about', $data);
    }

    public function offer()
    {
        $data = Offer::where('with_carousel', 1);
        return view('frontend.offer', $data);
    }

    public function contact_us()
    {
        $data = [];

        if (app()->getLocale() == 'ar') {
            $data['meta_title']       = 'اتصل بمستشفى د. خالد الرحيمي اليوم';
            $data['meta_description'] = ' لديك استفسار أو تحتاج لموعد؟ تواصل معنا الآن واحجز استشارتك مع نخبة الأطباء. نحن هنا لخدمتك.';
        } else {
            $data['meta_title']       = 'Contact Dr. Khaled Al Ruhaimi Hospital Today';
            $data['meta_description'] = 'Have questions or need care? Contact us now and book your consultation with expert doctors. We\'re here to help you.';
        }

        $data['branch']   = Branch::orderBy('sort', 'asc')->get();
        $data['services'] = Service::all();
        return view('frontend_v2.contact', $data);
    }

    public function doctors()
    {
        $data['doctors'] = Doctor::join('departments', 'doctors.department', '=', 'departments.id')
            ->select('doctors.*', 'departments.department_ar as department_name')
            ->where('doctors.frontpage', '=', 1)
            ->orderBy('sort', 'asc')
            ->get();
        $data['department'] = Department::whereNotNull('department_ar')->get();

        return view('frontend.doctor', $data);
    }

    public function branch_location($branchId = null)
    {
        $data['branchDetails'] = Branch::find($branchId);
        return view('frontend.branch_location', $data);
    }

    public function departmentDetails($slug = null)
    {
        $data = array();
        $data['details'] = Department::where('slug', $slug)->firstOrFail();
        return view('frontend.departmentDetails', $data);
    }

    public function privacy_policy()
    {

        return view('frontend_v2.privacy');
    }

    public function services()
    {
        $data = [];

        if (app()->getLocale() == 'ar') {
            $data['meta_title']       = 'خدمات طبية وتجميلية - مستشفى د. خالد الرحيمي';
            $data['meta_description'] = 'اختر من بين خدماتنا الطبية والجراحية والتجميلية المصممة لاحتياجاتك. اكتشف خبرة أطبائنا واحجز الآن.';
        } else {
            $data['meta_title']       = 'Medical & Cosmetic Services - Al Ruhaimi Hospital';
            $data['meta_description'] = 'Discover advanced medical, surgical & cosmetic services tailored to your needs. Choose your specialty and book your visit now.';
        }

        $data['doctors'] = Doctor::join('departments', 'doctors.department', '=', 'departments.id')
            ->select('doctors.*', 'departments.department_ar as department_ar', 'departments.department_en as department_en', 'departments.id as dept_id')
            ->orderBy('sort', 'asc')
            ->get();

        $data['department'] = Department::whereNotNull('department_ar')->orderBy('sort', 'asc')->get();
        return view('frontend_v2.services', $data);
    }


    public function enquirySubmit(EnquiryRequest $request)
    {
        $enquiry = Enquiry::create($request->validated());

        return response()->json([
            'status' => true,
            'data'   => $enquiry,
            'message' => 'Thank you for contacting <strong>DRK Hospital</strong>.<br>Our team will reach out shortly.'
        ]);
    }
}
