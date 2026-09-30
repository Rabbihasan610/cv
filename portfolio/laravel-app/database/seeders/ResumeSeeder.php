<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['type' => 'experience', 'title' => 'Full-Stack Developer', 'subtitle' => 'Riyadh Online | Full-time', 'date_range' => 'Jan 2024 - Present', 'description' => 'Develop and maintain Laravel modules across CRM, ERP, union-service, healthcare, accounting, and courier-management platforms. Successfully integrated ZKTeco hardware with application workflows and implemented supporting data-processing functionality. Build reusable services, RESTful APIs, role-based workflows, MySQL processes, dynamic reporting, and print-ready document modules. Troubleshoot production issues, protect data integrity, integrate third-party services, and support releases and project deployment.', 'order' => 1],
            ['type' => 'experience', 'title' => 'Full-Stack Developer', 'subtitle' => 'TDevs | Full-time | Tungi, Gazipur', 'date_range' => 'Jan 2023 - Dec 2023', 'description' => 'Delivered client-specific HRM and CodeCanyon features after reviewing application architecture, dependencies, and customization constraints. Designed and implemented payment gateway integrations covering callbacks, webhooks, transaction states, validation, and error handling. Refactored Laravel modules and MySQL database logic to resolve functional and data defects and improve maintainability.', 'order' => 2],
            ['type' => 'experience', 'title' => 'Junior Developer', 'subtitle' => 'Desktop IT | Full-time', 'date_range' => 'Jan 2022 - Dec 2022', 'description' => 'Collaborated with senior developers to implement and integrate application modules using established architecture and coding standards. Investigated application and database defects and supported debugging, testing, regression validation, and release preparation. Applied code-review feedback and participated in daily technical coordination to support consistent team delivery.', 'order' => 3],
            
            ['type' => 'education', 'title' => 'Diploma in Computer Engineering', 'subtitle' => 'Thakurgaon Polytechnic Institute', 'date_range' => '2021', 'description' => 'CGPA: 3.61 / 4.00', 'order' => 1],
            ['type' => 'education', 'title' => 'Secondary School Certificate', 'subtitle' => 'Nouton Bandar Bangheri High School', 'date_range' => '2017', 'description' => 'GPA: 4.23 / 5.00', 'order' => 2],
            
            ['type' => 'training', 'title' => 'Web Design and Development', 'subtitle' => 'LEDP | Offline', 'date_range' => null, 'description' => null, 'order' => 1],
            ['type' => 'training', 'title' => 'Professional Web Development', 'subtitle' => 'Creative IT | Offline', 'date_range' => null, 'description' => null, 'order' => 2],
            
            ['type' => 'language', 'title' => 'Bangla', 'subtitle' => 'Native', 'date_range' => null, 'description' => null, 'order' => 1],
            ['type' => 'language', 'title' => 'English', 'subtitle' => 'Professional working proficiency', 'date_range' => null, 'description' => null, 'order' => 2],
            
            ['type' => 'volunteer', 'title' => 'SEQAEP', 'subtitle' => 'Volunteer | Social Work', 'date_range' => null, 'description' => null, 'order' => 1],
            
            ['type' => 'reference', 'title' => 'Mhr Habib', 'subtitle' => 'Senior Engineer, Agent To ROI', 'date_range' => null, 'description' => 'Phone: +880 1684-208275', 'order' => 1],
            ['type' => 'reference', 'title' => 'Ashaduzzaman Faruque', 'subtitle' => 'Software Engineer, Soft Valley', 'date_range' => null, 'description' => 'Phone: +880 1648-583443', 'order' => 2],
        ];

        foreach ($items as $item) {
            \App\Models\ResumeItem::firstOrCreate(
                ['type' => $item['type'], 'title' => $item['title']],
                $item
            );
        }
    }
}
