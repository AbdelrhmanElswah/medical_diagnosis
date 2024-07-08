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
                'description' => '<p>MRI scan showing glioma, a type of tumor that arises from glial cells which
                are the supportive cells (not neurons) in the brain or spine, often appearing as
                irregular, infiltrative masses.
                Gliomas can be benign (slow-growing and noncancerous) or malignant (fastgrowing and cancerous).</p>',
                'type' => 'brain'
            ],
            [
                'class_name' => 'normal',
                'description' => '<p>MRI scans of healthy brains with no detectable tumors.</p><p>Continue to monitor your health and maintain regular neurological check-ups</p>',
                'type' => 'brain'
            ],
            [
                'class_name' => 'meningioma_tumor',
                'description' => '<p>This scan has detected meningiomas</p> <p>meningiomas tumors develop from the meninges, the
                protective membranes covering the brain and spinal cord, usually appearing as
                well-defined, localized masses.
                The vast majority (around 90%) of meningiomas are benign. Malignant
                meningiomas are rare..</p>',
                'type' => 'brain'
            ],
            [
                'class_name' => 'pituitary_tumor',
                'description' => '<p>The presence of a pituitary tumor has been detected.</p><p>
                g tumors in the pituitary gland, a small gland at the base of
                the brain which produces hormones that regulate various bodily functions, these
                tumors often appearing as small, localized growths.
                Like meningiomas, most pituitary tumors (around 80%) are benign. However,
                even benign tumors can cause problems by affecting hormone production</p>',
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
