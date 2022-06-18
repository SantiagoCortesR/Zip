<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    
    public function run()
    {
        $student =  Role::create(['name' => 'student','description' => 'Student']);
        $parent =  Role::create(['name' => 'parent','description' => 'Parent']);
        $dissabled =  Role::create(['name' => 'dissabled','description' => 'Dissabled']);
        $superadmin =  Role::create(['name' => 'superadmin', 'description' => 'Super Admin']);
        $admin =  Role::create(['name' => 'admin','description' => 'Administrative']);
        $tutor =  Role::create(['name' => 'tutor','description' => 'Tutor']);
        $financial =  Role::create(['name' => 'financial','description' => 'Financial']);
   
        
        
 
        Permission::create(['name' => 'dashboard.index', 'description' => 'View Dashboard'])->syncRoles([$admin, $tutor, $student, $parent, $financial]);
        Permission::create(['name' => 'dashboard.index.payments', 'description' => 'View Payments Links'])->syncRoles([$admin, $financial]);

        Permission::create(['name' => 'administrator.users.index', 'description' => 'View Users Roles'])->syncRoles([$admin, $tutor]);
        Permission::create(['name' => 'administrator.users.edit', 'description' => 'Edit Users Roles']);
        Permission::create(['name' => 'administrator.users.update', 'description' => 'Update Users Roles']);

        Permission::create(['name' => 'administrator.roles.index', 'description' => 'View Roles']);
        Permission::create(['name' => 'administrator.roles.edit', 'description' => 'Edit Roles']);
        Permission::create(['name' => 'administrator.roles.create', 'description' => 'Create Roles']);
        Permission::create(['name' => 'administrator.roles.update', 'description' => 'Update Roles']);
        Permission::create(['name' => 'administrator.roles.destroy', 'description' => 'Delete Roles']);
        

        Permission::create(['name' => 'employees.index', 'description' => 'View Employees'])->syncRoles([$admin, $financial, $tutor]);
        Permission::create(['name' => 'employees.create', 'description' => 'Create Employees'])->syncRoles([$admin, $financial]);
        Permission::create(['name' => 'employees.edit', 'description' => 'Edit Employees'])->syncRoles([$admin, $financial, $tutor]);
        Permission::create(['name' => 'employees.show', 'description' => 'View Profile Employees'])->syncRoles([$admin, $financial, $tutor]);
        
        Permission::create(['name' => 'employees.deactivate', 'description' => 'Deactivate Employees'])->syncRoles([$admin, $financial]);
        Permission::create(['name' => 'BankAccountDetails', 'description' => 'View Bank Account Details'])->syncRoles([$financial]);

        Permission::create(['name' => 'appraisal.index', 'description' => 'View Staff Appraisals'])->syncRoles([$admin, $financial]);
        Permission::create(['name' => 'appraisal.show', 'description' => 'Create Appraisals'])->syncRoles([$admin, $financial]);
        Permission::create(['name' => 'appraisal.delete', 'description' => 'Delete Appraisals'])->syncRoles([$admin, $financial]);
        Permission::create(['name' => 'appraisal.myappraisal', 'description' => 'View My Appraisal'])->syncRoles([$admin, $financial, $tutor]);

        Permission::create(['name' => 'notice.create', 'description' => 'View notice'])->syncRoles([$admin, $financial]);
        Permission::create(['name' => 'notice.store', 'description' => 'Create notice'])->syncRoles([$admin, $financial]);
        Permission::create(['name' => 'notice.delete', 'description' => 'Delete notice'])->syncRoles([$admin, $financial]);


        Permission::create(['name' => 'tasks.index', 'description' => 'View Tasks'])->syncRoles([$admin, $financial, $tutor]);
        Permission::create(['name' => 'tasks.store', 'description' => 'Save Tasks'])->syncRoles([$admin, $financial, $tutor]);
        Permission::create(['name' => 'tasks.update', 'description' => 'Update Tasks'])->syncRoles([$admin, $financial, $tutor]);
        Permission::create(['name' => 'tasks.destroy', 'description' => 'Delete Tasks'])->syncRoles([$admin, $financial, $tutor]);



        Permission::create(['name' => 'Preenrolment.index', 'description' => 'Enrolment'])->syncRoles([$admin, $financial]);

        Permission::create(['name' => 'student.index', 'description' => 'Student Active']);
        Permission::create(['name' => 'student.former', 'description' => 'Student Former']);
        Permission::create(['name' => 'student.list', 'description' => 'Student List']);
        Permission::create(['name' => 'enquiry', 'description' => 'Enquiry']);
        Permission::create(['name' => 'library', 'description' => 'library']);
        Permission::create(['name' => 'TermDates', 'description' => 'Term Dates']);

        
        Permission::create(['name' => 'marketing', 'description' => 'Marketing and Sales']);
        Permission::create(['name' => 'assessmentsTool', 'description' => 'Assessments Tool']);
        Permission::create(['name' => 'AssignTutors', 'description' => 'Assign Tutors']);


        Permission::create(['name' => 'AttendanceHistory', 'description' => 'Attendance History']);
        Permission::create(['name' => 'AttendanceCommentsParent', 'description' => 'Attendance Comments Parent']);
        Permission::create(['name' => 'AttendanceCommentsTutoring', 'description' => 'Attendance Comments Tutoring']);
        Permission::create(['name' => 'CreateHomeworkAttendance', 'description' => 'Create Homework Attendance']);
        Permission::create(['name' => 'UpdateStudentAttendance', 'description' => 'Update Student Attendance']);
        Permission::create(['name' => 'CompleteLearningPlan', 'description' => 'Complete Learning Plan']);
        Permission::create(['name' => 'AddLessonComponent', 'description' => 'Add Lesson Component']);


        Permission::create(['name' => 'DashboardRecentEnquiry', 'description' => 'Dashboard Recent Enquiry']);
        Permission::create(['name' => 'DashboardWebsiteEnquiry', 'description' => 'Dashboard Website Enquiry']);
        Permission::create(['name' => 'DashboardPreenrolment', 'description' => 'Dashboard Pre-enrolment']);
        Permission::create(['name' => 'DashboardEnrolment', 'description' => 'Dashboard Enrolment']);


        

        
        
    }
}
