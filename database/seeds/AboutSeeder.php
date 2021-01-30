<?php

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            [
                'language' => 'en',
                'content' => '<h1><strong>Millions of jobs, finds the one that&#39;s right for you</strong></h1>
                              <p>We also know those epic stories, those modern-day legends surrounding the early failures of such supremely successful folks as Michael Jordan and Bill Gates. We can look a bit further back in time to Albert Einstein or even further back to Abraham Lincoln.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'language' => 'hi',
                'content' => '<h1><strong>लाखों नौकरियां, वही पाती हैं जो आपके लिए सही है </strong></h1>
                             <p>हम उन महाकाव्य कहानियों को भी जानते हैं, जो आधुनिक समय की किंवदंतियों में माइकल जॉर्डन और बिल गेट्स जैसे सर्वोच्च सफल लोगों की शुरुआती विफलताओं के आसपास हैं। हम अल्बर्ट आइंस्टीन के समय में थोड़ा आगे पीछे दिख सकते हैं या फिर अब्राहम लिंकन के आगे भी।</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'language' => 'ar',
                'content' => '<h1><strong>ملايين الوظائف ، تجد الوظيفة المناسبة لك</strong></h1>
                             <p>نحن نعرف أيضًا تلك القصص الملحمية ، تلك الأساطير الحديثة التي تحيط بالفشل المبكر لأشخاص ناجحين للغاية مثل مايكل جوردان وبيل جيتس. يمكننا أن ننظر إلى الوراء قليلاً إلى الوراء إلى ألبرت أينشتاين أو حتى العودة إلى أبراهام لنكولن.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
