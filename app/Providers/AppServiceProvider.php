<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use DB;
use Blade;
use App\User;
use App\Fee;
use App\SchoolInformation;
use App\Student;
use App\Staff;
use App\Department;
use App\Expense;
use App\Programme;
use App\Section;
use App\AcademicYear;
use App\ZoomLesson;
use App\FeeType;
use App\Level;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         Schema::defaultStringLength(191);


         View::composer('*', function($view){

        $recentpayment = DB::table('students')
                        ->select('*')
                        ->join('payments', 'students.std_id', 'payments.student_id')
                        ->get();

        $total_amount = DB::table('students')
                ->select('*')
                ->join('payments', 'students.std_id', 'payments.student_id')
                ->get()
                ->sum('amount');

        $total_owings = DB::table('students')
                ->select('*')
                ->join('payments', 'students.std_id', 'payments.student_id')
                ->get()
                ->sum('balance');

            $view->with('studentdata', $recentpayment);
            $view->with('total_amount', $total_amount);
            $view->with('total_owings', $total_owings);

            // Sharing of Fees data
            $feesettings = Fee::all();

            $view->with('feesettings', $feesettings);


            // Sharing of student data
            $students = Student::paginate(5);

            $view->with('students', $students);


            // Sharing of FeeType
            $feetype = FeeType::all();

            $view->with('feetype', $feetype);


            // to enable us check if data is empty
            $user = User::all();

            $view->with('user', $user);


            // Share Staff Data
            $staff= Staff::all();

            $view->with('staff', $staff);

           

            // Sharing of School Information
            $schoolsetup = SchoolInformation::all();

            $view->with('schoolinfo', $schoolsetup);

            // use Department
            $all_department = Department::all();
            $view->with('departments', $all_department);


            // use Programmes
            $class_list = Programme::all();
            $view->with('class_list', $class_list);
            



            // Zoom
            $programmes = ZoomLesson::all();
            $view->with('programmes', $programmes);

            // use Section
            $all_section = Section::all();
            $view->with('section_list', $all_section);

            // use Level
            $all_level = Level::all();
            $view->with('level_list', $all_level);


            // Expenses

            $all_expenses = Expense::all();
            $view->with('expenses', $all_expenses);

            $academic_year = AcademicYear::all();
            $view->with('academics', $academic_year);
            

            $counter = Expense::count();
            $view->with('counting', $counter);



            // student statistic


            $countgender = DB::table('students')
                     ->select('gender', DB::raw('count(*) as total'))
                     ->groupBy('gender')
                     ->get()->toArray();
                     $view->with('gender', $countgender);


            $countclass = DB::table('students')
                     ->select('c_level', DB::raw('count(*) as Class_total'))
                     ->groupBy('c_level')
                     ->get()->toArray();
                     $view->with('class', $countclass);


            




            

         });



         Blade::directive('convert', function($money){
            return "<?php echo number_format($money, 2); ?>";
         });
















    }
}
