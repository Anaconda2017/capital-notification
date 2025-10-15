<?php

namespace App\Http\Controllers;

use App\User;
use App\About;
use App\Major;
use App\Client;
use App\Slider;
use App\GalleryNew;
use App\AboutWhySection;
use App\Contact;
use App\Faculty;
use App\Gallery;
use App\SeoTag;
use Carbon\Carbon;
use App\Department;
use App\University;
use App\Destination;
use App\FileMovement;
use App\AdFormCountries;
use App\AdFormAreas;
use App\FacultyData;
use App\BlogUser;
use App\UniversityData;
use App\FacultyUniversity;
use Illuminate\Http\Request;
use App\FacultyMajorUniversity;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Frontend\StoreFeedbackInfoRequest;
use App\Http\Requests\Frontend\StoreUserAcademicInfoRequest;
use App\Http\Requests\Frontend\StoreUserPersonalInfoRequest;
use App\UserQualification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['showPersonalInfo', 'submitPersonalInfo', 'showAcademicInfo', 'submitAcademicInfo', 'showAdmissionInfo', 'submitAdmissionInfo']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if(app()->getLocale() == 'en') {
            $obj = array();
            $countryData = Destination::get();
            $universityData = University::get();
            $FacultyData = Faculty::get();
            foreach($countryData as $country)
            {

                $dataCountry[] =  array('county' => $country->en_name , 'countryId' => $country->id );
                $dataCountryid[] =  $country->id ;
            }
            foreach($universityData as $university)
            {

                $dataUni[] = $university->en_name;
                $dataidUniid[] =   $university->id;
            }

            foreach($FacultyData as $faculty)
            {
                foreach($faculty->universities as $facuUni)
                {
                    $dataFacuUniId[]  = $facuUni->pivot->id;
                    $dataFacuUn[] = $facuUni->en_name;
                    $datafacu[] = $faculty->en_name.' ('.$facuUni->en_name.')';
                }
            }
        }
        else
        {
            $obj = array();
            $countryData = Destination::get();
            $universityData = University::get();
            $FacultyData = Faculty::get();
            foreach($countryData as $country)
            {

                $dataCountry[] =  array('county' => $country->ar_name , 'countryId' => $country->id );
                $dataCountryid[] =  $country->id ;
            }
            foreach($universityData as $university)
            {

                $dataUni[] = $university->ar_name;
                $dataidUniid[] =   $university->id;
            }

            foreach($FacultyData as $faculty)
            {
                foreach($faculty->universities as $facuUni)
                {
                    $dataFacuUniId[]  = $facuUni->pivot->id;
                    $dataFacuUn[] = $facuUni->ar_name;
                    $datafacu[] = $faculty->ar_name.' ('.$facuUni->ar_name.')';
                }
            }
        }
        
        $galleryNews = GalleryNew::limit(5)->get();
        $tags = SeoTag::where('tag_type' , 'home')->get()->first();
        $images = Gallery::get()->random(1);

        return view('frontend.home' , compact( 'galleryNews' ,'tags','images','dataCountry' , 'countryData', 'dataCountryid' , 'dataUni' , 'dataidUniid' , 'datafacu' , 'dataFacuUniId' ));
    }
    
    public function blogsDatas(){
        $blogs = BlogUser::where('blog_status' , 1)->get();
        
        return view('frontend.blogs-log' , compact('blogs'));
    }
    
    public function galleryImagesData(){
        $galleries = GalleryNew::get();
        
        return view('frontend.gallery-log' , compact('galleries'));
    }
    
    public function countryData()
    {
        $countryData = Destination::get();
        
        $tags = SeoTag::where('tag_type' , 'studyAbroad')->get()->first();
        
        return view('frontend.country-data' , compact('countryData' , 'tags'));
    }

    public function blogData($blogDataV)
    {
        if(app()->getLocale() == 'en') {
            
            $blogData = BlogUser::where('blog_status' , 1)->where('en_slug' , $blogDataV)->get()->first();
            $blogData->update([
                'counter_view' => $blogData->counter_view+1
                ]);
            $blogother = BlogUser::where('blog_status' , 1)->where('en_slug', '!=', $blogDataV)->get();
    
        } else 
        {
            if($blogDataV == 'الدراسة-في-مصر-للسعوديين')
            {
                $blogData = BlogUser::where('blog_status' , 1)->where('ar_slug' , 'شروط-الدراسة-في-مصر-للسعوديين-2023')->get()->first();    
            } else {
                
            $blogData = BlogUser::where('blog_status' , 1)->where('ar_slug' , $blogDataV)->get()->first();
            }
            $blogData->update([
                'counter_view' => $blogData->counter_view+1
                ]);
            $blogother = BlogUser::where('blog_status' , 1)->where('ar_slug', '!=', $blogDataV)->get();
        }
        
        
        
        return view('frontend.blogData' , compact('blogData' , 'blogother'));
    }
    
    

    public function privacyPolicy()
    {
        return view('frontend.privacy-policy');
    }



    public function testData()
    {
        return view('frontend.testData');
    }

    public function adForm(AdFormCountries $adFormCountries) {

        $adFormAreas = $adFormCountries->adFormAreas()->get();

        return view('frontend.ad_form', compact('adFormCountries', 'adFormAreas'));
    }

    public function generalForm(Request $request) {
        
            return view('frontend.generalForm');
        
    }

    public function adFormNew() {

        $tags = SeoTag::where('tag_type' , 'addmissionFormG')->get()->first();
        return view('frontend.ad_form_new' , compact('tags'));
    }
    
    public function adFormBa() {
        $tags = SeoTag::where('tag_type' , 'addmissionFormB')->get()->first();

        return view('frontend.formBa' , compact('tags'));
    }
    
    public function adFormMa() {
        $tags = SeoTag::where('tag_type' , 'addmissionFormM')->get()->first();

        return view('frontend.formMa' , compact('tags'));
    }
    
    public function adFormPh() {
        $tags = SeoTag::where('tag_type' , 'addmissionFormP')->get()->first();

        return view('frontend.formPHD' , compact('tags'));
    }

    public function adFormYouTube() {


        return view('frontend.ad_form_youtube');
    }

    public function adFormSnap() {


        return view('frontend.ad_form_snap');
    }

    public function egecFirstAdForm(AdFormCountries $adFormCountries) {

        $adFormAreas = $adFormCountries->adFormAreas()->get();

        return view('frontend.egec_first_ad_form', compact('adFormCountries', 'adFormAreas'));
    }

    public function egecSecondAdForm() {



        return view('frontend.egec_second_ad_form');
    }

    public function edugateForm() {



        $adFormAreas = AdFormAreas::where('ad_form_countries_id' , 1)->get();

        return view('frontend.edugatefrom' , compact('adFormAreas'));
    }


    public function filterUniversities(Request $request) {
        $destination = Destination::findorFail($request->destination_id);

        $universities = [];

        $uniId = $destination->universities()->pluck('universities.id')->toArray();

        if(app()->getLocale() == 'en') {
            $uniName = $destination->universities()->pluck('universities.en_name')->toArray();
        } else {
            $uniName = $destination->universities()->pluck('universities.ar_name')->toArray();
        }

        $universities[] = [
            'id' => $uniId,
            'name' => $uniName
        ];

        return $universities;
    }

    public function filterColleges(Request $request) {
        $university = University::findorFail($request->university_id);

        $faculties = [];

        $facUniId = [];
        $facName = [];

        foreach($university->faculties as $faculty) {
            $facUniId[] = $faculty->pivot->id;
            if(app()->getLocale() == 'en') {
                $facName[] = $faculty->en_name;
            } else {
                $facName[] = $faculty->ar_name;
            }
        }

        $faculties[] = [
            'id' => $facUniId,
            'name' => $facName,
            'university_name' => app()->getLocale() == 'en' ? $university->en_name : $university->ar_name
        ];

        return $faculties;
    }

    public function filterMajors(Request $request) {
        $facUniId = FacultyUniversity::findorFail($request->fac_uni_id);
        $faculty = Faculty::findorFail($facUniId->faculty_id);
        $university = University::findorFail($facUniId->university_id);

        $majors = [];

        $facUniMajorId = [];
        $majorName = [];

        foreach($facUniId->majors as $major) {
            $facUniMajorId[] = $major->pivot->id;
            if(app()->getLocale() == 'en') {
                $majorName[] = $major->en_name;
            } else {
                $majorName[] = $major->ar_name;
            }
        }

        $majors[] = [
            'id' => $facUniMajorId,
            'name' => $majorName,
            'faculty_name' => app()->getLocale() == 'en' ? $faculty->en_name : $faculty->ar_name,
            'university_name' => app()->getLocale() == 'en' ? $university->en_name : $university->ar_name
        ];

        return $majors;
    }

    public function filterDepartments(Request $request) {
        $facultyMajorUniversity = FacultyMajorUniversity::findorFail($request->fac_uni_major_id);

        $departments = [];

        $departmentsId = [];
        $departmentsName = [];

        foreach($facultyMajorUniversity->departments as $department) {
            $departmentsId[] = $department->id;
            if(app()->getLocale() == 'en') {
                $departmentsName[] = $department->en_name;
            } else {
                $departmentsName[] = $department->ar_name;
            }
        }

        $departments[] = [
            'id' => $departmentsId,
            'name' => $departmentsName,
        ];

        return $departments;
    }

    public function filterUniversitiesAdmission(Request $request) {
        $destination = Destination::findorFail($request->admission_destination_id);

        $universities = [];

        $uniId = $destination->universities()->pluck('universities.id')->toArray();

        if(app()->getLocale() == 'en') {
            $uniName = $destination->universities()->pluck('universities.en_name')->toArray();
        } else {
            $uniName = $destination->universities()->pluck('universities.ar_name')->toArray();
        }

        $universities[] = [
            'id' => $uniId,
            'name' => $uniName
        ];

        return $universities;
    }

    public function filterCollegesAdmission(Request $request) {
        $university = University::findorFail($request->admission_university_id);

        $faculties = [];

        $facUniId = [];
        $facName = [];

        foreach($university->faculties as $faculty) {
            $facUniId[] = $faculty->pivot->id;
            if(app()->getLocale() == 'en') {
                $facName[] = $faculty->en_name;
            } else {
                $facName[] = $faculty->ar_name;
            }
        }

        $faculties[] = [
            'id' => $facUniId,
            'name' => $facName,
            'university_name' => app()->getLocale() == 'en' ? $university->en_name : $university->ar_name
        ];

        return $faculties;
    }

    public function filterMajorsAdmission(Request $request) {
        $facUniId = FacultyUniversity::findorFail($request->admission_fac_uni_id);
        $faculty = Faculty::findorFail($facUniId->faculty_id);
        $university = University::findorFail($facUniId->university_id);

        $majors = [];

        $facUniMajorId = [];
        $majorName = [];

        foreach($facUniId->majors as $major) {
            $facUniMajorId[] = $major->pivot->id;
            if(app()->getLocale() == 'en') {
                $majorName[] = $major->en_name;
            } else {
                $majorName[] = $major->ar_name;
            }
        }

        $majors[] = [
            'id' => $facUniMajorId,
            'name' => $majorName,
            'faculty_name' => app()->getLocale() == 'en' ? $faculty->en_name : $faculty->ar_name,
            'university_name' => app()->getLocale() == 'en' ? $university->en_name : $university->ar_name
        ];

        return $majors;
    }

    public function filterDepartmentsAdmission(Request $request) {
        $facultyMajorUniversity = FacultyMajorUniversity::findorFail($request->admission_fac_uni_major_id);

        $departments = [];

        $departmentsId = [];
        $departmentsName = [];

        foreach($facultyMajorUniversity->departments as $department) {
            $departmentsId[] = $department->id;
            if(app()->getLocale() == 'en') {
                $departmentsName[] = $department->en_name;
            } else {
                $departmentsName[] = $department->ar_name;
            }
        }

        $departments[] = [
            'id' => $departmentsId,
            'name' => $departmentsName,
        ];

        return $departments;
    }

    
    public function search(Request $request) {
        if(isset($request->destination_id) && !isset($request->university_id) && !isset($request->fac_uni_id) && !isset($request->fac_uni_major_id)) {
            $country = Destination::findorFail($request->destination_id);

            return view('frontend.search_results.search_results_destination', compact('country'));
        } elseif(isset($request->destination_id) && isset($request->university_id) && !isset($request->fac_uni_id) && !isset($request->fac_uni_major_id)) {
            $country = Destination::find($request->destination_id);

            $university = University::findorFail($request->university_id);

            return view('frontend.search_results.search_results_university', compact('country', 'university'));
        } elseif(isset($request->destination_id) && isset($request->university_id) && isset($request->fac_uni_id) && !isset($request->fac_uni_major_id)) {
            $universityFaculty = FacultyUniversity::findorFail($request->fac_uni_id);

            return view('frontend.search_results.search_results_faculty', compact('universityFaculty'));
        } elseif(isset($request->destination_id) && isset($request->university_id) && isset($request->fac_uni_id) && isset($request->fac_uni_major_id)) {
            $country = Destination::findorFail($request->destination_id);
            $facultyUniversity = FacultyUniversity::findorFail($request->fac_uni_id);
            $university = University::findorFail($facultyUniversity->university_id);
            $faculty = Faculty::findorFail($facultyUniversity->faculty_id);

            if(app()->getLocale() == 'en') {
                return redirect()->route('faculty', [$country->en_slug, $university->en_slug, $faculty->en_slug]);
            } else {
                return redirect()->route('faculty', [$country->ar_slug, $university->ar_slug, $faculty->ar_slug]);
            }

        }elseif(isset($request->fac_uni_id) && isset($request->fac_uni_major_id))
        {
            $facultyUniversity = FacultyUniversity::findorFail($request->fac_uni_id);
            $university = University::findorFail($facultyUniversity->university_id);
            $faculty = Faculty::findorFail($facultyUniversity->faculty_id);
            $country = $university->destination; 

            if(app()->getLocale() == 'en') {
                return redirect()->route('faculty', [$country->en_slug, $university->en_slug, $faculty->en_slug]);
            } else {
                return redirect()->route('faculty', [$country->ar_slug, $university->ar_slug, $faculty->ar_slug]);
            }

        }elseif(isset($request->fac_uni_id))
        {
            $universityFaculty = FacultyUniversity::findorFail($request->fac_uni_id);

            return view('frontend.search_results.search_results_faculty', compact('universityFaculty'));

        } elseif(isset($request->fac_uni_id) && isset($request->university_id))
        {
            $universityFaculty = FacultyUniversity::findorFail($request->fac_uni_id);

            return view('frontend.search_results.search_results_faculty', compact('universityFaculty'));
        } elseif(isset($request->university_id))
        {
            $university = University::findorFail($request->university_id);
            $country = $university->destination;


            return view('frontend.search_results.search_results_university', compact('country', 'university'));
        }
    }

    public function advanceSearch(Request $request) {

        if(isset($request->destination_id)) {
            $country = Destination::findorFail($request->destination_id);

            return view('frontend.search_results.search_adv_results_destination', compact('country'));
        } elseif(isset($request->university_id)) {
            $university = University::findorFail($request->university_id);

            $country = Destination::find($university->destination->id);


            return view('frontend.search_results.search_adv_results_university', compact('country', 'university'));
        } elseif(isset($request->fac_uni_id)) {
            $universityFaculty = FacultyUniversity::findorFail($request->fac_uni_id);

            return view('frontend.search_results.search_adv_results_faculty', compact('universityFaculty'));
        }


    }


    public function clients() {
        $clients = Client::latest()->get();
        return view('frontend.clients', compact('clients'));
    }

    public function aboutUs() {
        $about = About::findorFail(1);
        $aboutWhySections = AboutWhySection::get();
        $clients = Client::latest()->get();
        $tags = SeoTag::where('tag_type' , 'aboutUs')->get()->first();
        return view('frontend.about-us', compact('about', 'clients' , 'tags' , 'aboutWhySections'));
    }

    public function contactUs() {
        
        $tags = SeoTag::where('tag_type' , 'contactUs')->get()->first();
        return view('frontend.contact-us' , compact('tags'));
    }

    public function sendInquiry(StoreFeedbackInfoRequest $request) {

        $requestArray = $request->all();

        Contact::create($requestArray);

        if(app()->getLocale() == 'en') {
            Session::flash('flash_message', 'Message sent successfully');
        } else {
            Session::flash('flash_message', 'تم ارسال الرسالة بنجاح');
        }

        return redirect()->route('contact-success');
    }

    public function contactsuccess()
    {
        return view('frontend.contactthanks');
    }

    public function faq() {
        return view('frontend.faq');
    }

    public function destination(Destination $country) {
        $otherCountry = Destination::where('en_name' ,'!=', $country->en_name)->get();
        $desBlogs = BlogUser::where('blog_status' , 1)->where('destination_id' , $country->id)->limit(3)->get();
        return view('frontend.destination', compact('country' , 'otherCountry' , 'desBlogs'));
    }
    
    public function countryBlogs($country){
        
            
            $otherCountry = Destination::where('en_slug' , $country)->orwhere('ar_slug' , $country)->get()->first();
            $desBlogs = BlogUser::where('blog_status' , 1)->where('destination_id' , $otherCountry->id)->get();
        
        
        return view('frontend.blog-country' , compact('otherCountry' , 'desBlogs'));
    }
    
    
    
    
    public function countrySingleBlogs($country , $blogData){
        $otherCountry = Destination::where('en_slug' , $country)->orwhere('ar_slug' , $country)->get()->first();
            $desBlogs = BlogUser::where('blog_status' , 1)->where('en_slug' , $blogData)->orwhere('ar_slug' , $blogData)->get()->first();
            $otherBlogs = BlogUser::where('blog_status' , 1)->where('en_slug'  , '!=', $blogData)->where('ar_slug'  , '!=', $blogData)->where('destination_id' , $otherCountry->id)->get();
        
        
        return view('frontend.blog-country-single' , compact('otherCountry' , 'desBlogs' , 'otherBlogs'));
    }
    
    public function universitySingleBlogs($country , $university , $blogData){
            $otherCountry = Destination::where('en_slug' , $country)->orwhere('ar_slug' , $country)->get()->first();
            $otherUniversity = University::where('en_slug' , $university)->orwhere('ar_slug' , $university)->get()->first();
            $desBlogs = BlogUser::where('blog_status' , 1)->where('en_slug' , $blogData)->orwhere('ar_slug' , $blogData)->get()->first();
            $otherBlogs = BlogUser::where('blog_status' , 1)->where('en_slug'  , '!=', $blogData)->where('ar_slug'  , '!=', $blogData)->where('university_id' , $otherUniversity->id)->get();
        
        
        return view('frontend.blog-university-single' , compact('otherCountry' , 'otherUniversity' , 'desBlogs' , 'otherBlogs'));
    }
    
    public function universityBlogs($country , $university){
        
            
            $otherCountry = Destination::where('en_slug' , $country)->orwhere('ar_slug' , $country)->get()->first();
            $otherUniversity = University::where('en_slug' , $university)->orwhere('ar_slug' , $university)->get()->first();
            $desBlogs = BlogUser::where('blog_status' , 1)->where('university_id' , $otherUniversity->id)->get();
        
        
        return view('frontend.blog-university' , compact('otherCountry' , 'otherUniversity' ,'desBlogs'));
    }
    
    
    public function facultySingleBlogs($country , $university , $faculty , $blogData){
            $otherCountry = Destination::where('en_slug' , $country)->orwhere('ar_slug' , $country)->get()->first();
            $otherUniversity = University::where('en_slug' , $university)->orwhere('ar_slug' , $university)->get()->first();
            $otherFaculty = Faculty::where('en_slug' , $faculty)->orwhere('ar_slug' , $faculty)->get()->first();
            $facultyUniversity = FacultyUniversity::where('university_id', $otherUniversity->id)->where('faculty_id', $otherFaculty->id)->first();
            $desBlogs = BlogUser::where('blog_status' , 1)->where('en_slug' , $blogData)->orwhere('ar_slug' , $blogData)->get()->first();
            $otherBlogs = BlogUser::where('blog_status' , 1)->where('faculty_university_id' , $facultyUniversity->id)->where('en_slug'  , '!=', $blogData)->where('ar_slug'  , '!=', $blogData)->get();
        
        
        return view('frontend.blog-faculty-single' , compact('otherCountry' , 'otherUniversity' , 'desBlogs' , 'otherBlogs' , 'otherFaculty'));
    }
    
    public function facultyBlogs($country , $university , $faculty){
        
            
            $otherCountry = Destination::where('en_slug' , $country)->orwhere('ar_slug' , $country)->get()->first();
            $otherUniversity = University::where('en_slug' , $university)->orwhere('ar_slug' , $university)->get()->first();
            $otherFaculty = Faculty::where('en_slug' , $faculty)->orwhere('ar_slug' , $faculty)->get()->first();
            $facultyUniversity = FacultyUniversity::where('university_id', $otherUniversity->id)->where('faculty_id', $otherFaculty->id)->first();
            $desBlogs = BlogUser::where('blog_status' , 1)->where('faculty_university_id' , $facultyUniversity->id)->get();
        
        
        return view('frontend.blog-faculty' , compact('otherCountry' , 'otherUniversity' ,'desBlogs' , 'otherFaculty'));
    }
    
    

    public function university(Destination $country, University $university) {
        $univDatas = UniversityData::where('uni_id' , $university->id)->get();
        $uniBlogs = BlogUser::where('blog_status' , 1)->where('university_id' , $university->id)->limit(3)->get();
        
        $faculties = $university->faculties;
        $univDestination = $country->universities()->inRandomOrder()->limit(5)->get();

        // dd($university->faculties);
        return view('frontend.university', compact('country', 'university' ,'univDatas' , 'faculties' , 'univDestination' , 'uniBlogs'));
    }

    public function faculty(Destination $country, University $university, Faculty $faculty) {
        $facultyUniversity = FacultyUniversity::where('university_id', $university->id)->where('faculty_id', $faculty->id)->first();
        $facBlogs = BlogUser::where('blog_status' , 1)->where('faculty_university_id' , $facultyUniversity->id)->limit(3)->get();
        $faclDatas = FacultyData::where('fac_uni_id' , $facultyUniversity->id)->get();
        $mejorDatas = FacultyMajorUniversity::where('faculty_university_id' , $facultyUniversity->id)->get();

        $facultyUniversityDatas = FacultyUniversity::where('faculty_id' , $faculty->id)->get() ;

        return view('frontend.faculty', compact( 'facultyUniversityDatas','country', 'university', 'faculty', 'facultyUniversity' , 'faclDatas'  , 'mejorDatas' , 'facBlogs'));
    }


    public function studyByFaculty($id)
    {
        if(app()->getLocale() == 'en') {
            $faculty = Faculty::where('special_id' , $id)->get();
            if ($id == 1) {
                $title = 'Engineering';
            } else if ($id == 2) {
                $title = 'Medicine';
            } else if ($id == 3) {
                $title = 'Computer sciences';
            } else if ($id == 4) {
                $title = 'Business Administration';
            } else if ($id == 5) {
                $title = 'no title';
            } else if ($id == 6) {
                $title = 'no title';
            } else if ($id == 7) {
                $title = 'Law';
            }else if ($id == 8) {
                $title = 'Human sciences';
            }
        } else {
            $faculty = Faculty::where('special_id' , $id)->get();
            if ($id == 1) {
                $title = 'هندسة';
            } else if ($id == 2) {
                $title = 'طب';
            } else if ($id == 3) {
                $title = 'علوم الحاسوب';
            } else if ($id == 4) {
                $title = 'إدارة الأعمال';
            } else if ($id == 5) {
                $title = 'no title';
            } else if ($id == 6) {
                $title = 'no title';
            } else if ($id == 7) {
                $title = 'قانون';
            }else if ($id == 8) {
                $title = 'العلوم الإنسانية';
            }
        }
        

        return view('frontend.studyByFaculty', compact('faculty' , 'title'));
    }


    public function studyByUniversity(Request $request)
    {

        if($request->faculty_slug)
        {

            $facultySlug = $request->faculty_slug;
            $facultyId = $request->faculty_id;
            $facultyName = $request->faculty_name;

            $facultyUniversitys = FacultyUniversity::where('faculty_id' , $facultyId)->get() ;

            return view('frontend.studyByUniversity', compact('facultySlug' , 'facultyId' , 'facultyName' , 'facultyUniversitys'));
        } else
        {
            return redirect()->route('home');
        }

    }

    public function showPersonalInfo() {
        $userPersonalInfo = auth()->user()->personal_info()->first();
        if($userPersonalInfo) {
            return view('frontend.personal_info', compact('userPersonalInfo'));
        } else {
            return view('frontend.personal_info');
        }
    }

    public function submitPersonalInfo(StoreUserPersonalInfoRequest $request) {

        // dd($request->full_name , $request->degree_needed);
        $requestArray = $request->except('_token');
        if(auth()->user()->personal_info()->first()) {
            $userPersonalInfo = auth()->user()->personal_info()->first();
            if($userPersonalInfo->degree_needed != $requestArray['degree_needed']) {
                auth()->user()->personal_info()->update($requestArray);
                if(auth()->user()->academic_info()->first()) {
                    auth()->user()->academic_info()->delete();
                }
            } else {
                auth()->user()->personal_info()->update($requestArray);
            }
            auth()->user()->update([
                'degree_needed' => $requestArray['degree_needed'],
                'name' => $requestArray['full_name'],
            ]);
        } else {
            auth()->user()->personal_info()->create($requestArray);
            auth()->user()->update([
                'degree_needed' => $requestArray['degree_needed'],
                'name' => $requestArray['full_name'],
                'source' => 'جوجل',
                'provider_name' => 'newEgecForm',
            ]);
        }

        if(auth()->user()->academic_info()->first()) {
            if(app()->getLocale() == 'en') {
                Session::flash('flash_message', 'Personal Info updated successfully');
            } else {
                Session::flash('flash_message', 'تم تحديث المعلومات الشخصية بنجاح');
            }
            Session::flash('flash_class', 'alert alert-success');
            return redirect()->route('show-personal-info');
        } else {
            if(app()->getLocale() == 'en') {
                Session::flash('flash_message', 'Personal Info updated successfully... You can update your academic info now!');
            } else {
                Session::flash('flash_message', 'تم تحديث المعلومات الشخصية بنجاح ... يمكنك تحديث معلوماتك الأكاديمية الآن');
            }
            Session::flash('flash_class', 'alert alert-success');
            return redirect()->route('show-academic-info');
        }

    }

    public function showAcademicInfo() {
        if(auth()->user()->personal_info()->first()) {
            $userPersonalInfo = auth()->user()->personal_info()->first();
            $academicInfo = auth()->user()->academic_info()->first();
            if($academicInfo) {
                if($userPersonalInfo->degree_needed == 'Bachelor') {
                    return view('frontend.academic_info_school', compact('academicInfo'));
                } elseif($userPersonalInfo->degree_needed == 'Master') {
                    return view('frontend.academic_info_university', compact('academicInfo'));
                } else {
                    return view('frontend.academic_info_master_university', compact('academicInfo'));
                }
            } else {
                if($userPersonalInfo->degree_needed == 'Bachelor') {
                    return view('frontend.academic_info_school');
                } elseif($userPersonalInfo->degree_needed == 'Master') {
                    return view('frontend.academic_info_university');
                }else {
                    return view('frontend.academic_info_master_university', compact('academicInfo'));
                }

            }
        } else {
            if(app()->getLocale() == 'en') {
                Session::flash('flash_message', 'You cannot fill in the academic information before filling in the personal information. Please fill in the personal information first');
            } else {
                Session::flash('flash_message', 'لا يمكنك ملء المعلومات الاكاديميه قبل ملء المعلومات الشخصيه , برجاء ملئ المعلومات الشخصيه اولا');
            }
            Session::flash('flash_class', 'alert alert-danger');
            return redirect()->route('show-personal-info');
        }
    }

    public function submitAcademicInfo(StoreUserAcademicInfoRequest $request) {

        $requestArray = $request->except('_token');

        if(auth()->user()->academic_info()->first()) {
            auth()->user()->academic_info()->update($requestArray);
        } else {
            auth()->user()->academic_info()->create($requestArray);
        }

        if(app()->getLocale() == 'en') {
            Session::flash('flash_message', 'Academic Info updated successfully');
        } else {
            Session::flash('flash_message', 'تم تحديث المعلومات الأكاديمية بنجاح');
        }
        Session::flash('flash_class', 'alert alert-success');
        return redirect()->route('home');

    }

    public function showAdmissionInfo() {
        $userPersonalInfo = auth()->user()->personal_info()->first();
        return view('frontend.admission_form', compact('userPersonalInfo'));
    }

    public function submitAdmissionInfo(Request $request) {

        $userPersonalInfo = auth()->user()->personal_info()->first();
        $userAcademicInfo = auth()->user()->academic_info()->first();
        $userAddmission = auth()->user()->user_admission_forms()->first();
        if($userAddmission)
        {
            if(isset($request->page)) {

                $this->validate($request, [
                    'destination_id' => 'required',
                    'university_id' => 'required',
                    'faculty_id' => 'required',
                ]);
                
                if($userAddmission->academic_guide == null)
                {
                    if($userAcademicInfo) {
                        auth()->user()->user_admission_forms()->create([
                            'destination' => $request->destination_id,
                            'university' => $request->university_id,
                            'faculty' => $request->faculty_id,
                            'degree_needed' => $userPersonalInfo->degree_needed,
                            'day' => Carbon::now()->format('d'),
                            'month' => Carbon::now()->format('F'),
                            'year' => Carbon::now()->format('Y'),
                        ]);
    
                        if(app()->getLocale() == 'en') {
                            Session::flash('flash_message', 'Admission Form submitted successfully');
                        } else {
                            Session::flash('flash_message', 'تم تقديم نموذج القبول بنجاح');
                        }
                        return redirect()->route('home');
                    } elseif(!$userPersonalInfo) {
                        if(app()->getLocale() == 'en') {
                            Session::flash('flash_message', 'Please fill in the personal information and then fill in the academic information');
                        } else {
                            Session::flash('flash_message', 'يرجى ملئ المعلومات الشخصيه ثم ملئ المعلومات الاكاديمية');
                        }
                        Session::flash('flash_class', 'alert alert-danger');
                        return redirect()->route('show-personal-info');
                    } else {
                        if(app()->getLocale() == 'en') {
                            Session::flash('flash_message', 'Please fill out the academic information first, then fill in the university application');
                        } else {
                            Session::flash('flash_message', 'يرجى ملئ المعلومات الاكاديمية اولا ثم ملئ الطلب الجامعي ');
                        }
                        Session::flash('flash_class', 'alert alert-danger');
                        return redirect()->route('show-academic-info');
                    }
                } else {
                    if($userAcademicInfo) {
                        auth()->user()->user_admission_forms()->create([
                            'destination' => $request->destination_id,
                            'university' => $request->university_id,
                            'faculty' => $request->faculty_id,
                            'degree_needed' => $userPersonalInfo->degree_needed,
                            'academic_guide' => $userAddmission->academic_guide,
                            'en_academic_guide' => $userAddmission->en_academic_guide,
                            'day' => Carbon::now()->format('d'),
                            'month' => Carbon::now()->format('F'),
                            'year' => Carbon::now()->format('Y'),
                        ]);
    
                        if(app()->getLocale() == 'en') {
                            Session::flash('flash_message', 'Admission Form submitted successfully');
                        } else {
                            Session::flash('flash_message', 'تم تقديم نموذج القبول بنجاح');
                        }
                        return redirect()->route('home');
                    } elseif(!$userPersonalInfo) {
                        if(app()->getLocale() == 'en') {
                            Session::flash('flash_message', 'Please fill in the personal information and then fill in the academic information');
                        } else {
                            Session::flash('flash_message', 'يرجى ملئ المعلومات الشخصيه ثم ملئ المعلومات الاكاديمية');
                        }
                        Session::flash('flash_class', 'alert alert-danger');
                        return redirect()->route('show-personal-info');
                    } else {
                        if(app()->getLocale() == 'en') {
                            Session::flash('flash_message', 'Please fill out the academic information first, then fill in the university application');
                        } else {
                            Session::flash('flash_message', 'يرجى ملئ المعلومات الاكاديمية اولا ثم ملئ الطلب الجامعي ');
                        }
                        Session::flash('flash_class', 'alert alert-danger');
                        return redirect()->route('show-academic-info');
                    }
                    
                }
                
            }

        } else {
            
            if(isset($request->page)) {

                $this->validate($request, [
                    'destination_id' => 'required',
                    'university_id' => 'required',
                    'faculty_id' => 'required',
                ]);

                if($userAcademicInfo) {
                    auth()->user()->user_admission_forms()->create([
                        'destination' => $request->destination_id,
                        'university' => $request->university_id,
                        'faculty' => $request->faculty_id,
                        'degree_needed' => $userPersonalInfo->degree_needed,
                        'day' => Carbon::now()->format('d'),
                        'month' => Carbon::now()->format('F'),
                        'year' => Carbon::now()->format('Y'),
                    ]);

                    if(app()->getLocale() == 'en') {
                        Session::flash('flash_message', 'Admission Form submitted successfully');
                    } else {
                        Session::flash('flash_message', 'تم تقديم نموذج القبول بنجاح');
                    }
                    return redirect()->route('home');
                } elseif(!$userPersonalInfo) {
                    if(app()->getLocale() == 'en') {
                        Session::flash('flash_message', 'Please fill in the personal information and then fill in the academic information');
                    } else {
                        Session::flash('flash_message', 'يرجى ملئ المعلومات الشخصيه ثم ملئ المعلومات الاكاديمية');
                    }
                    Session::flash('flash_class', 'alert alert-danger');
                    return redirect()->route('show-personal-info');
                } else {
                    if(app()->getLocale() == 'en') {
                        Session::flash('flash_message', 'Please fill out the academic information first, then fill in the university application');
                    } else {
                        Session::flash('flash_message', 'يرجى ملئ المعلومات الاكاديمية اولا ثم ملئ الطلب الجامعي ');
                    }
                    Session::flash('flash_class', 'alert alert-danger');
                    return redirect()->route('show-academic-info');
                }
            } else {

                $this->validate($request, [
                    'admission_destination_id' => 'required|integer',
                    'admission_university_id' => 'required|integer',
                    'admission_fac_uni_id' => 'required|integer',
                    'admission_fac_uni_major_id' => 'required|integer',
                    'admission_department_id' => 'required|integer'
                ]);

                $destination = Destination::findorFail($request->admission_destination_id);
                $university = University::findorFail($request->admission_university_id);
                $facUniId = FacultyUniversity::findorFail($request->admission_fac_uni_id);
                $faculty = Faculty::findorFail($facUniId->faculty_id);
                $facultyMajorUniversity = FacultyMajorUniversity::findorFail($request->admission_fac_uni_major_id);
                $major = Major::findorFail($facultyMajorUniversity->major_id);
                $department = Department::findorFail($request->admission_department_id);

                if($userAcademicInfo) {
                    auth()->user()->user_admission_forms()->create([
                        'destination' => $destination->en_name,
                        'university' => $university->en_name,
                        'faculty' => $faculty->en_name,
                        'major' => $major->en_name,
                        'department' => $department->en_name,
                        'degree_needed' => $userPersonalInfo->degree_needed,
                        'day' => Carbon::now()->format('d'),
                        'month' => Carbon::now()->format('F'),
                        'year' => Carbon::now()->format('Y'),
                    ]);

                    if(app()->getLocale() == 'en') {
                        Session::flash('flash_message', 'Admission Form submitted successfully');
                    } else {
                        Session::flash('flash_message', 'تم تقديم نموذج القبول بنجاح');
                    }
                    return redirect()->route('home');
                } elseif(!$userPersonalInfo) {
                    if(app()->getLocale() == 'en') {
                        Session::flash('flash_message', 'Please fill in the personal information and then fill in the academic information');
                    } else {
                        Session::flash('flash_message', 'يرجى ملئ المعلومات الشخصيه ثم ملئ المعلومات الاكاديمية');
                    }
                    Session::flash('flash_class', 'alert alert-danger');
                    return redirect()->route('show-personal-info');
                } else {
                    if(app()->getLocale() == 'en') {
                        Session::flash('flash_message', 'Please fill out the academic information first, then fill in the university application');
                    } else {
                        Session::flash('flash_message', 'يرجى ملئ المعلومات الاكاديمية اولا ثم ملئ الطلب الجامعي ');
                    }
                    Session::flash('flash_class', 'alert alert-danger');
                    return redirect()->route('show-academic-info');
                }
            }

        }

        

    }

    public function showPaperInfo(Request $request) {
        $admissionInfo = auth()->user()->user_admission_forms()->first();
        $user_movement = auth()->user()->file_movement()->first();

        if($admissionInfo) {
            if($admissionInfo->academic_guide != NULL) {
                if($user_movement) {
                    return view('frontend.paper_movement', compact('user_movement', 'admissionInfo'));
                } else {
                    return view('frontend.paper_movement');
                }
            } else {
                Session::flash('flash_class', 'alert alert-danger');
                Session::flash('flash_message', 'Academic Guide still not assigned to you... please wait');

                return redirect()->route('home');
            }
        } else {
            abort(404);
        }
    }

    public function submitFirstPaperInfo(Request $request) {

        $admissionInfo = auth()->user()->user_admission_forms()->first();
        $user_movement = auth()->user()->file_movement()->first();

        if($user_movement) {

            $this->validate($request, [
                'passport' => 'mimes:jpg,jpeg,png',
                'secondary_certificate' => 'mimes:jpg,jpeg,png',
                'birth_certificate' => 'mimes:jpg,jpeg,png'
            ]);

            if($request->hasFile('passport')) {

                if($user_movement->passport !== NULL) {
                    if (file_exists(public_path('movement/'. $user_movement->passport))) {
                        unlink(public_path('movement/'. $user_movement->passport));
                    }
                }

                $file = $request->file('passport');
                $fileName = time().str_random(10).'.'.$file->getClientOriginalExtension();
                $file->move(public_path('movement'), $fileName);

            }

            if($request->hasFile('secondary_certificate')) {

                if($user_movement->secondary_certificate !== NULL) {
                    if (file_exists(public_path('movement/'. $user_movement->secondary_certificate))) {
                        unlink(public_path('movement/'. $user_movement->secondary_certificate));
                    }
                }

                $file1 = $request->file('secondary_certificate');
                $fileName1 = time().str_random(10).'.'.$file1->getClientOriginalExtension();
                $file1->move(public_path('movement'), $fileName1);
            }

            if($request->hasFile('birth_certificate')) {

                if($user_movement->birth_certificate !== NULL) {
                    if (file_exists(public_path('movement/'. $user_movement->birth_certificate))) {
                        unlink(public_path('movement/'. $user_movement->birth_certificate));
                    }
                }

                $file2 = $request->file('birth_certificate');
                $fileName2 = time().str_random(10).'.'.$file2->getClientOriginalExtension();
                $file2->move(public_path('movement'), $fileName2);
            }

            $user_movement->update([
                'passport' => $request->hasFile('passport') ? $fileName : $user_movement->passport,
                'secondary_certificate' => $request->hasFile('secondary_certificate') ? $fileName1 : $user_movement->secondary_certificate,
                'birth_certificate' => $request->hasFile('birth_certificate') ? $fileName2 : $user_movement->birth_certificate,
            ]);

            Session::flash('flash_class', 'alert alert-success');
            Session::flash('flash_message', 'Paper updated');

            return redirect()->route('show-movement-info');
        } else {
            $this->validate($request, [
                'passport' => 'required|mimes:jpg,jpeg,png',
                'secondary_certificate' => 'required|mimes:jpg,jpeg,png',
                'birth_certificate' => 'required|mimes:jpg,jpeg,png'
            ]);

            if($request->hasFile('passport')) {
                $file = $request->file('passport');
                $fileName = time().str_random(10).'.'.$file->getClientOriginalExtension();
                $file->move(public_path('movement'), $fileName);
            }

            if($request->hasFile('secondary_certificate')) {
                $file1 = $request->file('secondary_certificate');
                $fileName1 = time().str_random(10).'.'.$file1->getClientOriginalExtension();
                $file1->move(public_path('movement'), $fileName1);
            }

            if($request->hasFile('birth_certificate')) {
                $file2 = $request->file('birth_certificate');
                $fileName2 = time().str_random(10).'.'.$file2->getClientOriginalExtension();
                $file2->move(public_path('movement'), $fileName2);
            }

            $admissionInfo->update([
                'registered' => 1,
                'paper_status' => 'مقبول'
            ]);

            FileMovement::create([
                'day' => Carbon::now()->format('d'),
                'month' => Carbon::now()->format('F'),
                'year' => Carbon::now()->format('Y'),
                'user_id' => auth()->user()->id,
                'passport' => $fileName,
                'secondary_certificate' => $fileName1,
                'birth_certificate' => $fileName2
            ]);

            Session::flash('flash_class', 'alert alert-success');
            Session::flash('flash_message', 'Paper submitted');

            return redirect()->route('show-movement-info');

        }

    }

    public function submitSecondPaperInfo(Request $request) {

            $admissionInfo = auth()->user()->user_admission_forms()->first();
            $user_movement = auth()->user()->file_movement()->first();

            if($admissionInfo->degree_needed == 'Bachelor') {

                $this->validate($request, [
                    'diploma' => 'mimes:jpg,jpeg,png',
                    'authorization' => 'mimes:jpg,jpeg,png',
                    'image' => 'mimes:jpg,jpeg,png',
                    'last_document' => 'mimes:jpg,jpeg,png'
                ]);

                if($request->hasFile('diploma')) {

                    if($user_movement->diploma !== NULL) {
                        if (file_exists(public_path('movement/'. $user_movement->diploma))) {
                            unlink(public_path('movement/'. $user_movement->diploma));
                        }
                    }

                    $file = $request->file('diploma');
                    $fileName = time().str_random(10).'.'.$file->getClientOriginalExtension();
                    $file->move(public_path('movement'), $fileName);

                }

                if($request->hasFile('authorization')) {

                    if($user_movement->authorization !== NULL) {
                        if (file_exists(public_path('movement/'. $user_movement->authorization))) {
                            unlink(public_path('movement/'. $user_movement->authorization));
                        }
                    }

                    $file1 = $request->file('authorization');
                    $fileName1 = time().str_random(10).'.'.$file1->getClientOriginalExtension();
                    $file1->move(public_path('movement'), $fileName1);
                }

                if($request->hasFile('image')) {

                    if($user_movement->image !== NULL) {
                        if (file_exists(public_path('movement/'. $user_movement->image))) {
                            unlink(public_path('movement/'. $user_movement->image));
                        }
                    }

                    $file2 = $request->file('image');
                    $fileName2 = time().str_random(10).'.'.$file2->getClientOriginalExtension();
                    $file2->move(public_path('movement'), $fileName2);
                }

                if($request->hasFile('last_document')) {

                    if($user_movement->last_document !== NULL) {
                        if (file_exists(public_path('movement/'. $user_movement->last_document))) {
                            unlink(public_path('movement/'. $user_movement->last_document));
                        }
                    }

                    $file3 = $request->file('last_document');
                    $fileName3 = time().str_random(10).'.'.$file3->getClientOriginalExtension();
                    $file3->move(public_path('movement'), $fileName3);
                }

                $user_movement->update([
                    'diploma' => $request->hasFile('diploma') ? $fileName : $user_movement->diploma,
                    'authorization' => $request->hasFile('authorization') ? $fileName1 : $user_movement->authorization,
                    'image' => $request->hasFile('image') ? $fileName2 : $user_movement->image,
                    'last_document' => $request->hasFile('last_document') ? $fileName3 : $user_movement->last_document,
                ]);

            } elseif($admissionInfo->degree_needed == 'Master') {

                $this->validate($request, [
                    'bachelor' => 'mimes:jpg,jpeg,png',
                    'degree_transcript' => 'mimes:jpg,jpeg,png',
                    'authorization' => 'mimes:jpg,jpeg,png',
                    'image' => 'mimes:jpg,jpeg,png',
                    'last_document' => 'mimes:jpg,jpeg,png'
                ]);

                if($request->hasFile('bachelor')) {

                    if($user_movement->bachelor !== NULL) {
                        if (file_exists(public_path('movement/'. $user_movement->bachelor))) {
                            unlink(public_path('movement/'. $user_movement->bachelor));
                        }
                    }

                    $file = $request->file('bachelor');
                    $fileName = time().str_random(10).'.'.$file->getClientOriginalExtension();
                    $file->move(public_path('movement'), $fileName);

                }

                if($request->hasFile('degree_transcript')) {

                    if($user_movement->degree_transcript !== NULL) {
                        if (file_exists(public_path('movement/'. $user_movement->degree_transcript))) {
                            unlink(public_path('movement/'. $user_movement->degree_transcript));
                        }
                    }

                    $file1 = $request->file('degree_transcript');
                    $fileName1 = time().str_random(10).'.'.$file1->getClientOriginalExtension();
                    $file1->move(public_path('movement'), $fileName1);

                }

                if($request->hasFile('authorization')) {

                    if($user_movement->authorization !== NULL) {
                        if (file_exists(public_path('movement/'. $user_movement->authorization))) {
                            unlink(public_path('movement/'. $user_movement->authorization));
                        }
                    }

                    $file2 = $request->file('authorization');
                    $fileName2 = time().str_random(20).'.'.$file2->getClientOriginalExtension();
                    $file2->move(public_path('movement'), $fileName2);
                }

                if($request->hasFile('image')) {

                    if($user_movement->image !== NULL) {
                        if (file_exists(public_path('movement/'. $user_movement->image))) {
                            unlink(public_path('movement/'. $user_movement->image));
                        }
                    }

                    $file3 = $request->file('image');
                    $fileName3 = time().str_random(10).'.'.$file3->getClientOriginalExtension();
                    $file3->move(public_path('movement'), $fileName3);
                }

                if($request->hasFile('last_document')) {

                    if($user_movement->last_document !== NULL) {
                        if (file_exists(public_path('movement/'. $user_movement->last_document))) {
                            unlink(public_path('movement/'. $user_movement->last_document));
                        }
                    }

                    $file4 = $request->file('last_document');
                    $fileName4 = time().str_random(10).'.'.$file4->getClientOriginalExtension();
                    $file4->move(public_path('movement'), $fileName4);
                }

                $user_movement->update([
                    'bachelor' => $request->hasFile('bachelor') ? $fileName : $user_movement->bachelor,
                    'degree_transcript' => $request->hasFile('degree_transcript') ? $fileName1 : $user_movement->degree_transcript,
                    'authorization' => $request->hasFile('authorization') ? $fileName2 : $user_movement->authorization,
                    'image' => $request->hasFile('image') ? $fileName3 : $user_movement->image,
                    'last_document' => $request->hasFile('last_document') ? $fileName4 : $user_movement->last_document,
                ]);

            } else {

                $this->validate($request, [
                    'master' => 'mimes:jpg,jpeg,png',
                    'authorization' => 'mimes:jpg,jpeg,png',
                    'image' => 'mimes:jpg,jpeg,png',
                    'last_document' => 'mimes:jpg,jpeg,png'
                ]);

                if($request->hasFile('master')) {

                    if($user_movement->master !== NULL) {
                        if (file_exists(public_path('movement/'. $user_movement->master))) {
                            unlink(public_path('movement/'. $user_movement->master));
                        }
                    }

                    $file = $request->file('master');
                    $fileName = time().str_random(10).'.'.$file->getClientOriginalExtension();
                    $file->move(public_path('movement'), $fileName);

                }

                if($request->hasFile('authorization')) {

                    if($user_movement->authorization !== NULL) {
                        if (file_exists(public_path('movement/'. $user_movement->authorization))) {
                            unlink(public_path('movement/'. $user_movement->authorization));
                        }
                    }

                    $file1 = $request->file('authorization');
                    $fileName1 = time().str_random(10).'.'.$file1->getClientOriginalExtension();
                    $file1->move(public_path('movement'), $fileName1);
                }

                if($request->hasFile('image')) {

                    if($user_movement->image !== NULL) {
                        if (file_exists(public_path('movement/'. $user_movement->image))) {
                            unlink(public_path('movement/'. $user_movement->image));
                        }
                    }

                    $file2 = $request->file('image');
                    $fileName2 = time().str_random(10).'.'.$file2->getClientOriginalExtension();
                    $file2->move(public_path('movement'), $fileName2);
                }

                if($request->hasFile('last_document')) {

                    if($user_movement->last_document !== NULL) {
                        if (file_exists(public_path('movement/'. $user_movement->last_document))) {
                            unlink(public_path('movement/'. $user_movement->last_document));
                        }
                    }

                    $file3 = $request->file('last_document');
                    $fileName3 = time().str_random(10).'.'.$file3->getClientOriginalExtension();
                    $file3->move(public_path('movement'), $fileName3);
                }

                $user_movement->update([
                    'master' => $request->hasFile('master') ? $fileName : $user_movement->master,
                    'authorization' => $request->hasFile('authorization') ? $fileName1 : $user_movement->authorization,
                    'image' => $request->hasFile('image') ? $fileName2 : $user_movement->image,
                    'last_document' => $request->hasFile('last_document') ? $fileName3 : $user_movement->last_document,
                ]);

            }


            Session::flash('flash_class', 'alert alert-success');
            Session::flash('flash_message', 'Paper updated');

            return redirect()->route('show-movement-info');
    }

    public function submitFirstMoneyInfo(Request $request) {
        $admissionInfo = auth()->user()->user_admission_forms()->first();

        $this->validate($request, [
            'account_finance_first_image' => 'mimes:jpg,jpeg,png',
        ]);

        if($request->hasFile('account_finance_first_image')) {

            if($admissionInfo->account_finance_first_image !== NULL) {
                if (file_exists(public_path('movement/'. $admissionInfo->account_finance_first_image))) {
                    unlink(public_path('movement/'. $admissionInfo->account_finance_first_image));
                }
            }

            $file = $request->file('account_finance_first_image');
            $fileName = time().str_random(10).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('movement'), $fileName);

        }

        $admissionInfo->update([
            'account_finance_first_image' => $request->hasFile('account_finance_first_image') ? $fileName : $admissionInfo->account_finance_first_image,
        ]);

        Session::flash('flash_class', 'alert alert-success');
        Session::flash('flash_message', 'First Money updated');

        return redirect()->route('show-movement-info');
    }

    public function submitSecondMoneyInfo(Request $request) {
        $admissionInfo = auth()->user()->user_admission_forms()->first();

        $this->validate($request, [
            'account_finance_second_image' => 'mimes:jpg,jpeg,png',
        ]);

        if($request->hasFile('account_finance_second_image')) {

            if($admissionInfo->account_finance_second_image !== NULL) {
                if (file_exists(public_path('movement/'. $admissionInfo->account_finance_second_image))) {
                    unlink(public_path('movement/'. $admissionInfo->account_finance_second_image));
                }
            }

            $file = $request->file('account_finance_second_image');
            $fileName = time().str_random(10).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('movement'), $fileName);

        }

        $admissionInfo->update([
            'account_finance_second_image' => $request->hasFile('account_finance_second_image') ? $fileName : $admissionInfo->account_finance_second_image,
        ]);

        Session::flash('flash_class', 'alert alert-success');
        Session::flash('flash_message', 'Second Money updated');

        return redirect()->route('show-movement-info');
    }

    public function submitThirdMoneyInfo(Request $request) {
        $admissionInfo = auth()->user()->user_admission_forms()->first();

        $this->validate($request, [
            'account_finance_third_image' => 'mimes:jpg,jpeg,png',
        ]);

        if($request->hasFile('account_finance_third_image')) {

            if($admissionInfo->account_finance_third_image !== NULL) {
                if (file_exists(public_path('movement/'. $admissionInfo->account_finance_third_image))) {
                    unlink(public_path('movement/'. $admissionInfo->account_finance_third_image));
                }
            }

            $file = $request->file('account_finance_third_image');
            $fileName = time().str_random(10).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('movement'), $fileName);

        }

        $admissionInfo->update([
            'account_finance_third_image' => $request->hasFile('account_finance_third_image') ? $fileName : $admissionInfo->account_finance_third_image,
        ]);

        Session::flash('flash_class', 'alert alert-success');
        Session::flash('flash_message', 'Third Money updated');

        return redirect()->route('show-movement-info');
    }

    public function submitFourthMoneyInfo(Request $request) {
        $admissionInfo = auth()->user()->user_admission_forms()->first();

        $this->validate($request, [
            'account_finance_fourth_image' => 'mimes:jpg,jpeg,png',
        ]);

        if($request->hasFile('account_finance_fourth_image')) {

            if($admissionInfo->account_finance_fourth_image !== NULL) {
                if (file_exists(public_path('movement/'. $admissionInfo->account_finance_fourth_image))) {
                    unlink(public_path('movement/'. $admissionInfo->account_finance_fourth_image));
                }
            }

            $file = $request->file('account_finance_fourth_image');
            $fileName = time().str_random(10).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('movement'), $fileName);

        }

        $admissionInfo->update([
            'account_finance_fourth_image' => $request->hasFile('account_finance_fourth_image') ? $fileName : $admissionInfo->account_finance_fourth_image,
        ]);

        Session::flash('flash_class', 'alert alert-success');
        Session::flash('flash_message', 'Fourth Money updated');

        return redirect()->route('show-movement-info');
    }

    public function submitGoogleFormInfo(Request $request) {

        $characters = '0123456789';
        $basic = 'EG-';
        $lenthNumber = 6;
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $lenthNumber; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $dateNow = Carbon::now('Africa/Cairo')->format('Ymd');
        $randomString = $dateNow .$randomString;



        $password = $this->generateRandomString();

        if($request->degree_needed == 'Bachelor') {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'phone' => 'required|unique:users',
                'birthdate' => 'required',
                'nationality' => 'required',
                'nation' => 'required',
                'area' => 'required',

            ]);
        } elseif($request->degree_needed == 'Master') {
            $this->validate($request, [
                'email' => 'required|email|unique:users',
                'phone' => 'required|unique:users',
                'name' => 'required',
                'birthdate' => 'required',
                'nationality' => 'required',
                'nation' => 'required',
                'area' => 'required',
            ]);
        } else {
            $this->validate($request, [
                'email' => 'required|email|unique:users',
                'phone' => 'required|unique:users',
                'name' => 'required',
                'birthdate' => 'required',
                'nationality' => 'required',
                'nation' => 'required',
                'area' => 'required',
            ]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'degree_needed' => $request->degree_needed,
            'password' => Hash::make($password),
            'source' => 'جوجل',
            'provider_name' => 'egec',
            'uniqe_id' => $randomString,
        ]);

        $user->personal_info()->create([
            'full_name' => $request->name,
            'birthdate' => $request->birthdate,
            'nationality' => $request->nationality,
            'nation' => $request->nation,
            'area' => $request->area,
            'degree_needed' => $request->degree_needed
        ]);

        if($request->degree_needed == 'Bachelor') {
            $user->academic_info()->create([
                'degree_name' => 'High School',
                'last_academic_degree' => $request->school_degree_name,
                'degree_year' => $request->school_degree_year,
                'degree_country' => $request->school_degree_country,
                'gpa_precentage' => $request->percentage,
                'education_system' => $request->education_system,
            ]);


        } elseif($request->degree_needed == 'Master') {

            $user->academic_info()->create([
                'degree_name' => 'Bachelor',
                'last_academic_degree' => $request->bachelor_degree_name,
                'degree_year' => $request->bachelor_degree_year,
                'degree_country' => $request->bachelor_degree_country,
                'university_name' => $request->bachelor_university_name,
                'faculty_name' => $request->bachelor_faculty_name,
                'gpa_precentage' => $request->bachelor_gpa_precentage,
                'education_system' => $request->bachelor_education_system,
            ]);
        } else {
            $user->academic_info()->create([
                'degree_name' => 'Master',
                'last_academic_degree' => $request->master_degree_name,
                'degree_year' => $request->master_degree_year,
                'degree_country' => $request->master_degree_country,
                'university_name' => $request->master_university_name,
                'faculty_name' => $request->master_faculty_name,
                'master_name' => $request->master_name,
                'gpa_precentage' => $request->master_gpa_precentage,
            ]);
        }


        $user->user_admission_forms()->create([
                'destination' => null,
                'university' => null,
                'faculty' => null,
                'major' => null,
                'department' => null,
                'degree_needed' => $request->degree_needed,
                'day' => Carbon::now()->format('d'),
                'month' => Carbon::now()->format('F'),
                'year' => Carbon::now()->format('Y'),
            ]);




        $email_data = array(
        'name' => $request->name,
        'email' => $request->email,
        'password' => $password,
        );


        $usename = $request->name;
        $useremail = $request->email;
        $usepass = $password;


        $newUser = $user->email;



        Mail::send('frontend.emailsend' , ['user' => $user , 'password' => $password], function($message) use ($user , $password)
            {
                $message->from('admission@egecmena.com', "Egec");
                $message->subject($user->name);
                $message->to($user->email);
            });

        Mail::send('frontend.emailsendnew' , ['user' => $user , 'password' => $password ], function($message) use ($user , $password)
            {
                $message->from('admission@egecmena.com', "Egec");
                $message->subject($user->name);
                $message->to('m.rashad@egecmena.com');
            });


        return redirect()->route('registration-success')->with('user_submitted_email', $newUser)->with('user_submitted_password', $password)->with('name' ,$usename )->with('email' , $useremail)->with('passowrd' , $usepass);
    }


     public function submitGoogleFormInfoNewV(Request $request) {
         
     
        $blogData = $request->blog_slug;
        $characters = '0123456789';
        $basic = 'EG-';
        $lenthNumber = 6;
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $lenthNumber; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $dateNow = Carbon::now('Africa/Cairo')->format('Ymd');
        $randomString = $dateNow .$randomString;


        $password = $this->generateRandomString();

            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'full_phone' => 'required',
                'nationality' => 'required',
            ]);

        
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->full_phone,
                'degree_needed' => $request->degree_needed,
                'password' => Hash::make($password),
                'source' => 'جوجل',
                'provider_name' => 'newEgecForm',
                'uniqe_id' => $randomString,
            ]);
        

        if($blogData) {

        $user->personal_info()->create([
            'full_name' => $request->name,
            'nationality' => $request->nationality,
            'degree_needed' => $request->degree_needed,
            'utm_source' => 'blog',
            'utm_id' => $request->utm_id,
            'blog_info' => $blogData
        ]);

    } else {
        $user->personal_info()->create([
            'full_name' => $request->name,
            'nationality' => $request->nationality,
            'degree_needed' => $request->degree_needed,
            'utm_source' => $request->utm_source,
            'utm_id' => $request->utm_id,
        ]);
    }
        
        if($request->degree_needed == 'Bachelor')
        {
            $user->academic_info()->create([
                'degree_name' => 'High School',
                'last_academic_degree' => $request->degree_name_bachlor,
                'branch_user_mejor' => $request->user_mejor_bachlor,
                'degree_year' => null,
                'degree_country' => null,
                'university_name' => null,
                'faculty_name' => null,
                'master_name' => null,
                'gpa_precentage' => $request->gpa_precentage,
                'education_system' => null,
            ]);
        } else if ($request->degree_needed == 'Master')
        {
            $user->academic_info()->create([
                'degree_name' => 'Bachelor',
                'last_academic_degree' => $request->degree_name_master,
                'branch_user_mejor' => $request->user_mejor_master,
                'degree_year' => null,
                'degree_country' => null,
                'university_name' => null,
                'faculty_name' => null,
                'master_name' => null,
                'gpa_precentage' => $request->gpa_precentage_master,
                'education_system' => null,
            ]);
        } else 
        {
            
           $user->academic_info()->create([
                'degree_name' => 'Master',
                'last_academic_degree' => $request->degree_name_phd,
                'branch_user_mejor' => $request->user_mejor_phd,
                'degree_name_phd_bachlor' => $request->degree_name_phd_bachlor,
                'degree_year' => null,
                'degree_country' => null,
                'university_name' => null,
                'faculty_name' => null,
                'master_name' => null,
                'gpa_precentage' => $request->gpa_precentage_bachlor_phd,
                'gpa_precentage_phd_master' => $request->gpa_precentage_bachlor_master,
                'education_system' => null,
            ]); 
        }

        $user->user_admission_forms()->create([
                'destination' => null,
                'university' => null,
                'faculty' => null,
                'major' => null,
                'department' => null,
                'registered' => 0,
                'degree_needed' => $request->degree_needed,
                'day' => Carbon::now()->format('d'),
                'month' => Carbon::now()->format('F'),
                'year' => Carbon::now()->format('Y'),
            ]);




        $email_data = array(
        'name' => $request->name,
        'email' => $request->email,
        'password' => $password,
        );


        $usename = $request->name;
        $useremail = $request->email;
        $usepass = $password;


        $newUser = $request->email;



        // Mail::send('frontend.emailsend' , ['user' => $user , 'password' => $password], function($message) use ($user , $password)
        //     {
        //         $message->from('admission@egecmena.com', "Egec");
        //         $message->subject($user->name);
        //         $message->to($user->email);
        //     });

        // Mail::send('frontend.emailsendnew' , ['user' => $user , 'password' => $password ], function($message) use ($user , $password)
        //     {
        //         $message->from('admission@egecmena.com', "Egec");
        //         $message->subject($user->name);
        //         $message->to('mohamed.khaled.khalifa.99@gmail.com');
        //     });
        Auth::login($user);

        return redirect()->route('registration-success-new-form')->with('user_submitted_email', $newUser)->with('user_submitted_password', $password)->with('name' ,$usename )->with('email' , $useremail)->with('passowrd' , $usepass);

    }
    
    public function submitGoogleFormInfoBA(Request $request) {

        $characters = '0123456789';
        $basic = 'EG-';
        $lenthNumber = 6;
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $lenthNumber; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $dateNow = Carbon::now('Africa/Cairo')->format('Ymd');
        $randomString = $dateNow .$randomString;


        $password = $this->generateRandomString();


        // dd($request->degree_needed , $request->name , $request->email , $request->birthdate , $request->nationality, $request->nation, $request->area);


            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'full_phone' => 'required',
                'nationality' => 'required',
            ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->full_phone,
            'degree_needed' => $request->degree_needed,
            'password' => Hash::make($password),
            'source' => 'جوجل',
            'provider_name' => 'newEgecForm',
            'uniqe_id' => $randomString,
        ]);

        $user->personal_info()->create([
            'name' => $request->name,
            'nationality' => $request->nationality,
            'degree_needed' => $request->degree_needed,
            'utm_source' => $request->utm_source,
            'utm_id' => $request->utm_id,
        ]);
        
        if($request->degree_needed == 'Bachelor')
        {
            $user->academic_info()->create([
                'degree_name' => 'High School',
                'last_academic_degree' => $request->last_academic_degree,
                'branch_user_mejor' => $request->branch_user_mejor,
                'degree_year' => null,
                'degree_country' => null,
                'university_name' => null,
                'faculty_name' => null,
                'master_name' => null,
                'gpa_precentage' => $request->gpa_precentage,
                'education_system' => null,
            ]);
        } else if ($request->degree_needed == 'Master')
        {
            $user->academic_info()->create([
                'degree_name' => 'Bachelor',
                'last_academic_degree' => $request->last_academic_degree,
                'branch_user_mejor' => $request->branch_user_mejor,
                'degree_year' => null,
                'degree_country' => null,
                'university_name' => null,
                'faculty_name' => null,
                'master_name' => null,
                'gpa_precentage' => null,
                'education_system' => null,
            ]);
        } else 
        {
           $user->academic_info()->create([
                'degree_name' => 'Master',
                'last_academic_degree' => $request->last_academic_degree,
                'branch_user_mejor' => $request->branch_user_mejor,
                'degree_year' => null,
                'degree_country' => null,
                'university_name' => null,
                'faculty_name' => null,
                'master_name' => null,
                'gpa_precentage' => null,
                'education_system' => null,
            ]); 
        }


        $user->user_admission_forms()->create([
                'destination' => null,
                'university' => null,
                'faculty' => null,
                'major' => null,
                'department' => null,
                'registered' => 0,
                'degree_needed' => $request->degree_needed,
                'day' => Carbon::now()->format('d'),
                'month' => Carbon::now()->format('F'),
                'year' => Carbon::now()->format('Y'),
            ]);




        $email_data = array(
        'name' => $request->name,
        'email' => $request->email,
        'password' => $password,
        );


        $usename = $request->name;
        $useremail = $request->email;
        $usepass = $password;


        $newUser = $request->email;



        // Mail::send('frontend.emailsend' , ['user' => $user , 'password' => $password], function($message) use ($user , $password)
        //     {
        //         $message->from('admission@egecmena.com', "Egec");
        //         $message->subject($user->name);
        //         $message->to($user->email);
        //     });

        // Mail::send('frontend.emailsendnew' , ['user' => $user , 'password' => $password ], function($message) use ($user , $password)
        //     {
        //         $message->from('admission@egecmena.com', "Egec");
        //         $message->subject($user->name);
        //         $message->to('m.rashad@egecmena.com');
        //     });


               return redirect()->route('BA-Success')->with('user_submitted_email', $newUser)->with('user_submitted_password', $password)->with('name' ,$usename )->with('email' , $useremail)->with('passowrd' , $usepass);

    }
    
    public function submitGoogleFormInfoMA(Request $request) {

        $characters = '0123456789';
        $basic = 'EG-';
        $lenthNumber = 6;
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $lenthNumber; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $dateNow = Carbon::now('Africa/Cairo')->format('Ymd');
        $randomString = $dateNow .$randomString;


        $password = $this->generateRandomString();


        // dd($request->degree_needed , $request->name , $request->email , $request->birthdate , $request->nationality, $request->nation, $request->area);


            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'full_phone' => 'required',
                'nationality' => 'required',
            ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->full_phone,
            'degree_needed' => $request->degree_needed,
            'password' => Hash::make($password),
            'source' => 'جوجل',
            'provider_name' => 'newEgecForm',
            'uniqe_id' => $randomString,
        ]);

        $user->personal_info()->create([
            'name' => $request->name,
            'nationality' => $request->nationality,
            'degree_needed' => $request->degree_needed,
            'utm_source' => $request->utm_source,
            'utm_id' => $request->utm_id,
        ]);
        
        if($request->degree_needed == 'Bachelor')
        {
            $user->academic_info()->create([
                'degree_name' => 'High School',
                'last_academic_degree' => $request->last_academic_degree,
                'branch_user_mejor' => $request->branch_user_mejor,
                'degree_year' => null,
                'degree_country' => null,
                'university_name' => null,
                'faculty_name' => null,
                'master_name' => null,
                'gpa_precentage' => null,
                'education_system' => null,
            ]);
        } else if ($request->degree_needed == 'Master')
        {
            $user->academic_info()->create([
                'degree_name' => 'Bachelor',
                'last_academic_degree' => $request->last_academic_degree,
                'branch_user_mejor' => $request->branch_user_mejor,
                'degree_year' => null,
                'degree_country' => null,
                'university_name' => null,
                'faculty_name' => null,
                'master_name' => null,
                'gpa_precentage' => null,
                'education_system' => null,
            ]);
        } else 
        {
           $user->academic_info()->create([
                'degree_name' => 'Master',
                'last_academic_degree' => $request->last_academic_degree,
                'branch_user_mejor' => $request->branch_user_mejor,
                'degree_year' => null,
                'degree_country' => null,
                'university_name' => null,
                'faculty_name' => null,
                'master_name' => null,
                'gpa_precentage' => null,
                'education_system' => null,
            ]); 
        }


            








        $user->user_admission_forms()->create([
                'destination' => null,
                'university' => null,
                'faculty' => null,
                'major' => null,
                'department' => null,
                'registered' => 0,
                'degree_needed' => $request->degree_needed,
                'day' => Carbon::now()->format('d'),
                'month' => Carbon::now()->format('F'),
                'year' => Carbon::now()->format('Y'),
            ]);




        $email_data = array(
        'name' => $request->name,
        'email' => $request->email,
        'password' => $password,
        );


        $usename = $request->name;
        $useremail = $request->email;
        $usepass = $password;


        $newUser = $request->email;



        Mail::send('frontend.emailsend' , ['user' => $user , 'password' => $password], function($message) use ($user , $password)
            {
                $message->from('admission@egecmena.com', "Egec");
                $message->subject($user->name);
                $message->to($user->email);
            });

        Mail::send('frontend.emailsendnew' , ['user' => $user , 'password' => $password ], function($message) use ($user , $password)
            {
                $message->from('admission@egecmena.com', "Egec");
                $message->subject($user->name);
                $message->to('m.rashad@egecmena.com');
            });


               return redirect()->route('MA-Success')->with('user_submitted_email', $newUser)->with('user_submitted_password', $password)->with('name' ,$usename )->with('email' , $useremail)->with('passowrd' , $usepass);

    }
    
    public function submitGoogleFormInfoPhD(Request $request) {

        $characters = '0123456789';
        $basic = 'EG-';
        $lenthNumber = 6;
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $lenthNumber; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $dateNow = Carbon::now('Africa/Cairo')->format('Ymd');
        $randomString = $dateNow .$randomString;


        $password = $this->generateRandomString();


        // dd($request->degree_needed , $request->name , $request->email , $request->birthdate , $request->nationality, $request->nation, $request->area);


            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'full_phone' => 'required',
                'nationality' => 'required',
            ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->full_phone,
            'degree_needed' => $request->degree_needed,
            'password' => Hash::make($password),
            'source' => 'جوجل',
            'provider_name' => 'newEgecForm',
            'uniqe_id' => $randomString,
        ]);

        $user->personal_info()->create([
            'name' => $request->name,
            'nationality' => $request->nationality,
            'degree_needed' => $request->degree_needed,
            'utm_source' => $request->utm_source,
            'utm_id' => $request->utm_id,
        ]);
        
        if($request->degree_needed == 'Bachelor')
        {
            $user->academic_info()->create([
                'degree_name' =>    'High School',
                'last_academic_degree' => $request->last_academic_degree,
                'branch_user_mejor' => $request->branch_user_mejor,
                'degree_year' => null,
                'degree_country' => null,
                'university_name' => null,
                'faculty_name' => null,
                'master_name' => null,
                'gpa_precentage' => null,
                'education_system' => null,
            ]);
        } else if ($request->degree_needed == 'Master')
        {
            $user->academic_info()->create([
                'degree_name' => 'Bachelor',
                'last_academic_degree' => $request->last_academic_degree,
                'branch_user_mejor' => $request->branch_user_mejor,
                'degree_year' => null,
                'degree_country' => null,
                'university_name' => null,
                'faculty_name' => null,
                'master_name' => null,
                'gpa_precentage' => null,
                'education_system' => null,
            ]);
        } else 
        {
           $user->academic_info()->create([
                'degree_name' => 'Master',
                'last_academic_degree' => $request->last_academic_degree,
                'branch_user_mejor' => $request->branch_user_mejor,
                'degree_name_phd_bachlor' => $request->degree_name_phd_bachlor,
                'degree_year' => null,
                'degree_country' => null,
                'university_name' => null,
                'faculty_name' => null,
                'master_name' => null,
                'gpa_precentage' => null,
                'education_system' => null,
            ]); 
        }


            








        $user->user_admission_forms()->create([
                'destination' => null,
                'university' => null,
                'faculty' => null,
                'major' => null,
                'department' => null,
                'registered' => 0,
                'degree_needed' => $request->degree_needed,
                'day' => Carbon::now()->format('d'),
                'month' => Carbon::now()->format('F'),
                'year' => Carbon::now()->format('Y'),
            ]);




        $email_data = array(
        'name' => $request->name,
        'email' => $request->email,
        'password' => $password,
        );


        $usename = $request->name;
        $useremail = $request->email;
        $usepass = $password;


        $newUser = $request->email;



        Mail::send('frontend.emailsend' , ['user' => $user , 'password' => $password], function($message) use ($user , $password)
            {
                $message->from('admission@egecmena.com', "Egec");
                $message->subject($user->name);
                $message->to($user->email);
            });

        Mail::send('frontend.emailsendnew' , ['user' => $user , 'password' => $password ], function($message) use ($user , $password)
            {
                $message->from('admission@egecmena.com', "Egec");
                $message->subject($user->name);
                $message->to('m.rashad@egecmena.com');
            });


               return redirect()->route('PhD-Success')->with('user_submitted_email', $newUser)->with('user_submitted_password', $password)->with('name' ,$usename )->with('email' , $useremail)->with('passowrd' , $usepass);

    }

    public function submitGoogleFormInfoYouTube(Request $request) {

        $characters = '0123456789';
        $basic = 'EG-';
        $lenthNumber = 6;
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $lenthNumber; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $dateNow = Carbon::now('Africa/Cairo')->format('Ymd');
        $randomString = $dateNow .$randomString;


        $password = $this->generateRandomString();



            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'phone' => 'required',
                'nationality' => 'required',
            ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'degree_needed' => $request->degree_needed,
            'password' => Hash::make($password),
            'source' => 'جوجل',
            'provider_name' => 'youtube',
            'uniqe_id' => $randomString,
        ]);

        $user->personal_info()->create([
            'name' => $request->name,
            'nationality' => $request->nationality,
            'degree_needed' => $request->degree_needed
        ]);


       if($request->degree_needed == 'Bachelor')
        {
            $user->academic_info()->create([
                'degree_name' => 'High School',
                'last_academic_degree' => $request->degree_name,
                'degree_year' => null,
                'degree_country' => null,
                'university_name' => null,
                'faculty_name' => null,
                'master_name' => null,
                'gpa_precentage' => null,
                'education_system' => null,
            ]);
        } else if ($request->degree_needed == 'Master')
        {
            $user->academic_info()->create([
                'degree_name' => 'Bachelor',
                'last_academic_degree' => $request->degree_name,
                'degree_year' => null,
                'degree_country' => null,
                'university_name' => null,
                'faculty_name' => null,
                'master_name' => null,
                'gpa_precentage' => null,
                'education_system' => null,
            ]);
        } else 
        {
           $user->academic_info()->create([
                'degree_name' => 'Master',
                'last_academic_degree' => $request->degree_name,
                'degree_year' => null,
                'degree_country' => null,
                'university_name' => null,
                'faculty_name' => null,
                'master_name' => null,
                'gpa_precentage' => null,
                'education_system' => null,
            ]); 
        }








        $user->user_admission_forms()->create([
                'destination' => null,
                'university' => null,
                'faculty' => null,
                'major' => null,
                'department' => null,
                'registered' => 0,
                'degree_needed' => $request->degree_needed,
                'day' => Carbon::now()->format('d'),
                'month' => Carbon::now()->format('F'),
                'year' => Carbon::now()->format('Y'),
            ]);




        $email_data = array(
        'name' => $request->name,
        'email' => $request->email,
        'password' => $password,
        );


        $usename = $request->name;
        $useremail = $request->email;
        $usepass = $password;


        $newUser = $request->email;



        Mail::send('frontend.emailsend' , ['user' => $user , 'password' => $password], function($message) use ($user , $password)
            {
                $message->from('admission@egecmena.com', "Egec");
                $message->subject($user->name);
                $message->to($user->email);
            });

        Mail::send('frontend.emailsendnew' , ['user' => $user , 'password' => $password ], function($message) use ($user , $password)
            {
                $message->from('admission@egecmena.com', "Egec");
                $message->subject($user->name);
                $message->to('m.rashad@egecmena.com');
            });


               return redirect()->route('registration-success-youtube')->with('user_submitted_email', $newUser)->with('user_submitted_password', $password)->with('name' ,$usename )->with('email' , $useremail)->with('passowrd' , $usepass);

    }

    public function submitGoogleFormInfoSnap(Request $request) {

       

        $characters = '0123456789';
        $basic = 'EG-';
        $lenthNumber = 6;
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $lenthNumber; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $dateNow = Carbon::now('Africa/Cairo')->format('Ymd');
        $randomString = $dateNow .$randomString;


        $password = $this->generateRandomString();


        // dd($request->degree_needed , $request->name , $request->email , $request->birthdate , $request->nationality, $request->nation, $request->area);


            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'full_phone' => 'required',
            ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->full_phone,
            'degree_needed' => $request->degree_needed,
            'password' => Hash::make($password),
            'source' => 'جوجل',
            'provider_name' => 'newEgecForm',
            'uniqe_id' => $randomString,
        ]);

        $user->personal_info()->create([
            'name' => $request->name,
            'degree_needed' => $request->degree_needed,
            'utm_source' => $request->utm_source,
            'utm_id' => $request->utm_id,
        ]);
        
        if($request->degree_needed == 'Bachelor')
        {
            $user->academic_info()->create([
                'degree_name' => 'High School',
                'last_academic_degree' => $request->degree_name_bachlor,
                'branch_user_mejor' => $request->user_mejor_bachlor,
                'degree_year' => null,
                'degree_country' => null,
                'university_name' => null,
                'faculty_name' => null,
                'master_name' => null,
                'gpa_precentage' => $request->gpa_precentage,
                'education_system' => null,
            ]);
        } else if ($request->degree_needed == 'Master')
        {
            $user->academic_info()->create([
                'degree_name' => 'Bachelor',
                'last_academic_degree' => $request->degree_name_master,
                'branch_user_mejor' => $request->user_mejor_master,
                'degree_year' => null,
                'degree_country' => null,
                'university_name' => null,
                'faculty_name' => null,
                'master_name' => null,
                'gpa_precentage' => null,
                'education_system' => null,
            ]);
        } else 
        {
            
           $user->academic_info()->create([
                'degree_name' => 'Master',
                'last_academic_degree' => $request->degree_name_phd,
                'branch_user_mejor' => $request->user_mejor_phd,
                'degree_name_phd_bachlor' => $request->degree_name_phd_bachlor,
                'degree_year' => null,
                'degree_country' => null,
                'university_name' => null,
                'faculty_name' => null,
                'master_name' => null,
                'gpa_precentage' => null,
                'education_system' => null,
            ]); 
        }

        $user->user_admission_forms()->create([
                'destination' => null,
                'university' => null,
                'faculty' => null,
                'major' => null,
                'department' => null,
                'registered' => 0,
                'degree_needed' => $request->degree_needed,
                'day' => Carbon::now()->format('d'),
                'month' => Carbon::now()->format('F'),
                'year' => Carbon::now()->format('Y'),
            ]);




        $email_data = array(
        'name' => $request->name,
        'email' => $request->email,
        'password' => $password,
        );


        $usename = $request->name;
        $useremail = $request->email;
        $usepass = $password;


        $newUser = $request->email;



        Mail::send('frontend.emailsend' , ['user' => $user , 'password' => $password], function($message) use ($user , $password)
            {
                $message->from('admission@egecmena.com', "Egec");
                $message->subject($user->name);
                $message->to($user->email);
            });

        Mail::send('frontend.emailsendnew' , ['user' => $user , 'password' => $password ], function($message) use ($user , $password)
            {
                $message->from('admission@egecmena.com', "Egec");
                $message->subject($user->name);
                $message->to('m.rashad@egecmena.com');
            });


               return redirect()->route('registration-success-snap')->with('user_submitted_email', $newUser)->with('user_submitted_password', $password)->with('name' ,$usename )->with('email' , $useremail)->with('passowrd' , $usepass);



    }





    public function registrationsuccessNew()
    {
        // if (Session::has('user_submitted_email')){
            return view('frontend.thakyoNewForm');
        // }else{
        //     return view('frontend.generalForm');
        // }
    }
    
    public function BaSuccess()
    {
        if (Session::has('user_submitted_email')){
            return view('frontend.baThnak');
        }else{
            return view('frontend.formBa');
            // return view('frontend.baThnak');

        }
    }

    public function thank()
    {
        return view('frontend.thankOne');
    }

    public function thankTwo()
    {
        return view('frontend.thanktwo');
    }

    public function fifthStar()
    {
        $user = auth()->user();
        if($user) {

            $checkavail = UserQualification::where('user_id' , $user->id)->get()->first();
            if($checkavail->form_time_call != null) {
                return redirect()->route('home');
            } else {
                return view('frontend.fifthStar');
            }
        }

        
    }
    
    public function lastsuccess() {
        return view('frontend.last-success');
    }
    
    public function submitFifthStar(Request $request){
        // dd(1);
        $user = auth()->user();
        if($user) {
            $checkavail = UserQualification::where('user_id' , $user->id)->get()->first();
            if($checkavail->form_time_call != null) {
                return redirect()->route('lastsuccess');

            } else {

                $qualification = $checkavail->update([
                    'form_time_call' => $request->form_time_call,
                    'form_mean_comminication' => $request->form_mean_comminication ,
                    'form_studying_wish' => $request->form_studying_wish,
                ]);
    
                return redirect()->route('lastsuccess');

            }
        } else {
            return redirect()->route('home');
        }
    }

    public function fourthStar()
    {
        $user = auth()->user();
        if($user) {

            $checkavail = UserQualification::where('user_id' , $user->id)->get()->first();
            if($checkavail) {
                if($checkavail->form_time_call != null) {
                    return redirect()->route('home');
                } else {
                    return redirect()->route('thankTwo');
                }
            } else {    
                    return view('frontend.fourthStar');
            }
        }
       
    }

    public function submitFourthStar(Request $request){
        // dd(1);
        $user = auth()->user();
        if($user) {
            $checkavail = UserQualification::where('user_id' , $user->id)->get()->first();
            if($checkavail) {
                return redirect()->route('thankTwo');

            } else {

                $qualification = UserQualification::create([
                    'user_id' => $user->id, 
                    'form_capabilities' => $request->form_capabilities,
                    'form_graduation_year' => $request->form_graduation_year ,
                    'form_last_type_qualification' => $request->form_last_type_qualification,
                    
                    'form_bachelor_college' => $request->form_bachelor_college,
                    'form_bachelor_degree_system' => $request->form_bachelor_degree_system ,
                    'form_university_masters_required' => $request->form_university_masters_required,
                    'form_master_degree_system' => $request->form_master_degree_system,
                    'form_university_phd_required' => $request->form_university_phd_required ,
                ]);
    
                return view('frontend.thanktwo');
            }
        } else {
            return redirect()->route('home');
        }
    }
    
    
    
    public function generalSuccess()
    {
        if (Session::has('user_submitted_email')){
            return view('frontend.generalThnak');
        }else{
            return view('frontend.generalForm');
        }
    }
    
    public function MaSuccess()
    {
        if (Session::has('user_submitted_email')){
            return view('frontend.maThank');
        }else{
            return view('frontend.formMa');
        }
    }
    
    public function PhDSuccess()
    {
        if (Session::has('user_submitted_email')){
            return view('frontend.phdThank');
        }else{
            return view('frontend.formPHD');
        }
    }

    public function registrationsuccessYouTube()
    {
        if (Session::has('user_submitted_email')){
            return view('frontend.thakyoYouTube');
        }else{
            return view('frontend.ad_form_youtube');
        }
    }

    public function registrationsuccessSnap()
    {
        if (Session::has('user_submitted_email')){
            return view('frontend.thakyoSnap');
        }else{
            return view('frontend.ad_form_snap');
        }
    }

    public function registrationsuccess()
    {

        return view('frontend.thakyo');
    }

    public function submitEgecFirstGoogleFormInfo(Request $request) {
        $password = $this->generateRandomString();


            $this->validate($request, [
                'email' => 'required|string|email|max:255|unique:users',
                'full_name' => 'required',
                'phone' => 'required|digits:11',
                'nationality' => 'required',
                'nation' => 'required',
                'area' => 'required',
            ]);


        $user = User::create([
            'email' => $request->email,
            'name' => $request->full_name,
            'phone' => $request->phone,
            'password' => Hash::make($password),
            'source' => 'googlenew',
            'provider_name' => 'egecnew',
        ]);

        $user->personal_info()->create([
            'full_name' => $request->full_name,
            'nationality' => $request->nationality,
            'nation' => $request->nation,
            'area' => $request->area,
        ]);


        $newUser = $user->id;

        return redirect()->route('egecSecondAdForm')->with('user_id' , $newUser)->with('user_password' , $password);
    }

    public function submitEgecSecondGoogleFormInfo(Request $request) {

        // dd($request->user_id , $request->user_passowrd);
            $this->validate($request, [
                'pre_university_academic_qualification' => 'required',
                'education_system' => 'required',
                'school_degree_year' => 'required',
                'bachelor_gpa_precentage' => 'required',
                'degree_needed' => 'required',
            ]);

        $user = User::findorFail($request->user_id);

        $user->update([
            'degree_needed' => $request->degree_needed,
        ]);

        $user->personal_info()->update([
            'degree_needed' => $request->degree_needed
        ]);


            $user->academic_info()->create([
                'degree_name' => $request->pre_university_academic_qualification,
                'degree_year' => $request->school_degree_year,
                'gpa_precentage' => $request->bachelor_gpa_precentage,
                'education_system' => $request->education_system,
            ]);



        $newUser = $user->email;

        $password = $request->user_password;


        Mail::send('frontend.egecemailsend' , ['user' => $user , 'password' => $password], function($message) use ($user , $password)
            {
                $message->from('admission@egecmena.com', "Egec");
                $message->subject($user->name);
                $message->to($user->email);
            });


        return redirect()->route('egec-registration-success')->with('user_submitted_email', $newUser)->with('user_submitted_password', $password);
    }

    public function egecRegistrationSuccess()
    {

        return view('frontend.egecThankYou');
    }


    public function submitGoogleFormInfoEdugate(Request $request) {
        $password = $this->generateRandomString();

        if($request->degree_needed == 'Bachelor') {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|string|email|max:255|unique:users',
                'phone' => 'required',
                'birthdate' => 'required',
                'nationality' => 'required',
                'nation' => 'required',
                'area' => 'required',
            ]);
        } elseif($request->degree_needed == 'Master') {
            $this->validate($request, [
                'email' => 'required|string|email|max:255|unique:users',
                'phone' => 'required',
                'name' => 'required',
                'birthdate' => 'required',
                'nationality' => 'required',
                'nation' => 'required',
                'area' => 'required',
            ]);
        } else {
            $this->validate($request, [
                'email' => 'required|string|email|max:255|unique:users',
                'phone' => 'required',
                'name' => 'required',
                'birthdate' => 'required',
                'nationality' => 'required',
                'nation' => 'required',
                'area' => 'required',
            ]);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'degree_needed' => $request->degree_needed,
            'password' => Hash::make($password),
            'source' => 'جوجل',
            'provider_name' => 'edugate',
        ]);

        $user->personal_info()->create([
            'full_name' => $request->full_name,
            'birthdate' => $request->birthdate,
            'nationality' => $request->nationality,
            'nation' => $request->nation,
            'area' => $request->area,
            'degree_needed' => $request->degree_needed
        ]);

        if($request->degree_needed == 'Bachelor') {
            $user->academic_info()->create([
                'degree_name' => $request->school_degree_name,
                'degree_year' => $request->school_degree_year,
                'degree_country' => $request->school_degree_country,
                'gpa_precentage' => $request->percentage,
                'education_system' => $request->education_system,
            ]);
        } elseif($request->degree_needed == 'Master') {
            $user->academic_info()->create([
                'degree_name' => $request->bachelor_degree_name,
                'degree_year' => $request->bachelor_degree_year,
                'degree_country' => $request->bachelor_degree_country,
                'university_name' => $request->bachelor_university_name,
                'faculty_name' => $request->bachelor_faculty_name,
                'gpa_precentage' => $request->bachelor_gpa_precentage,
                'education_system' => $request->bachelor_education_system,
            ]);
        } else {
            $user->academic_info()->create([
                'degree_name' => $request->master_degree_name,
                'degree_year' => $request->master_degree_year,
                'degree_country' => $request->master_degree_country,
                'university_name' => $request->master_university_name,
                'faculty_name' => $request->master_faculty_name,
                'master_name' => $request->master_name,
                'gpa_precentage' => $request->master_gpa_precentage,
            ]);
        }


            $user->user_admission_forms()->create([
                'destination' => null,
                'university' => null,
                'faculty' => null,
                'major' => null,
                'department' => null,
                'degree_needed' => $request->degree_needed,
                'day' => Carbon::now()->format('d'),
                'month' => Carbon::now()->format('F'),
                'year' => Carbon::now()->format('Y'),
            ]);


         $usename = $request->full_name;
        $useremail = $request->email;
        $usepass = $password;

        $newUser = $user->email;

        Mail::send('frontend.emailsendnew' , ['user' => $user , 'password' => $password ], function($message) use ($user , $password)
            {
                $message->from('Sales@edugateuae.com', "EduGate");
                $message->subject($user->name);
                $message->to('m.rashad@egecmena.com');
            });

        Mail::send('frontend.emailsendnew' , ['user' => $user , 'password' => $password ], function($message) use ($user , $password)
            {
                $message->from('Sales@edugateuae.com', "EduGate");
                $message->subject($user->name);
                $message->to('hassan@digitalbondmena.com');
            });





        return redirect()->route('edugate-registration-success')->with('user_submitted_email', $newUser)->with('user_submitted_password', $password)->with('name' ,$usename )->with('email' , $useremail)->with('passowrd' , $usepass);
    }

    public function edugateregistrationsuccess()
    {

        return view('frontend.thankyoedugate');
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
