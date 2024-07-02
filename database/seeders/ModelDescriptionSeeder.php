<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelDescriptionSeeder extends Seeder
{
    public function run()
    {
        DB::table('model_descriptions')->insert([
            [
                'class_name' => 'glioma_tumor',
                'description' => '<p>This scan indicates the presence of a glioma tumor, a type of tumor that occurs in the brain and spinal cord.</p><p>The AI model has identified regions within the scan that suggest the presence of glioma, which is typically characterized by its shape and density.</p><p>Early detection is crucial for effective treatment. Consult a neurologist for further evaluation and possible intervention options.</p>',
                'type' => 'brain'
            ],
            [
                'class_name' => 'normal',
                'description' => '<p>The brain scan shows no evidence of tumors.</p><p>The AI model\'s analysis, using advanced pattern recognition, confirms the absence of abnormal growths.</p><p>Continue to monitor your health and maintain regular neurological check-ups, especially if you have risk factors or a family history of brain conditions.</p>',
                'type' => 'brain'
            ],
            [
                'class_name' => 'meningioma_tumor',
                'description' => '<p>This scan has detected a meningioma tumor, typically a benign tumor that forms on the membranes covering the brain and spinal cord, just inside the skull.</p><p>While often slow-growing, regular monitoring and medical guidance are recommended to manage and assess any potential changes in the tumor\'s behavior.</p>',
                'type' => 'brain'
            ],
            [
                'class_name' => 'pituitary_tumor',
                'description' => '<p>The presence of a pituitary tumor has been detected.</p><p>These tumors are often benign and develop in the pituitary gland.</p><p>It\'s important to follow up with endocrinological evaluation and management, as these tumors can affect hormonal balance and cause a variety of symptomatic expressions.</p>',
                'type' => 'brain'
            ],
            [
                'class_name' => 'covid',
                'description' => '<p>The scan suggests signs consistent with COVID-19 infection, characterized by ground-glass opacities and bilateral patchiness.</p><p>It\'s imperative to follow current health guidelines, seek medical attention immediately, and possibly isolate to prevent the spread of the virus.</p>',
                'type' => 'chest'
            ],
            [
                'class_name' => 'lung_opacity',
                'description' => '<p>This scan shows lung opacity, which may indicate conditions such as pneumonia or other pulmonary disorders.</p><p>Detailed examination and possibly further imaging are recommended to ascertain the cause and extent of the opacity for appropriate treatment.</p>',
                'type' => 'chest'
            ],
            [
                'class_name' => 'normal',
                'description' => '<p>This chest scan appears normal with no significant signs of infectious or chronic respiratory conditions.</p><p>Maintain a healthy lifestyle and ensure regular check-ups to continue monitoring your pulmonary health.</p>',
                'type' => 'chest'
            ],
            [
                'class_name' => 'viral_pneumonia',
                'description' => '<p>The scan indicates signs of viral pneumonia, characterized by the inflammation and consolidation in the lungs.</p><p>Immediate medical treatment is crucial to manage symptoms and prevent complications.</p><p>Follow-up care and monitoring are advised to assess recovery and prevent recurrence.</p>',
                'type' => 'chest'
            ],
            // Eye model descriptions
            [
                'class_name' => 'normal',
                'description' => '<p>This eye scan appears normal with no significant signs of eye diseases.</p><p>Continue to maintain regular eye check-ups to monitor your eye health and prevent any future complications.</p>',
                'type' => 'eye'
            ],
            [
                'class_name' => 'cataract',
                'description' => '<p>This scan indicates the presence of cataract, a condition where the lens of the eye becomes cloudy, affecting vision.</p><p>Early detection and treatment are important to prevent significant vision impairment. Consult an ophthalmologist for further evaluation and possible surgical options.</p>',
                'type' => 'eye'
            ],
            [
                'class_name' => 'diabetic_retinopathy',
                'description' => '<p>The scan suggests signs of diabetic retinopathy, a diabetes complication that affects the eyes.</p><p>It\'s crucial to manage your diabetes effectively and seek regular eye examinations to monitor and treat this condition. Consult an ophthalmologist for further evaluation and management.</p>',
                'type' => 'eye'
            ],
            [
                'class_name' => 'glaucoma',
                'description' => '<p>This scan indicates the presence of glaucoma, a group of eye conditions that damage the optic nerve, often caused by abnormally high pressure in the eye.</p><p>Early detection and treatment are vital to prevent vision loss. Consult an ophthalmologist for further evaluation and management options.</p>',
                'type' => 'eye'
            ]
        ]);
    }
}
