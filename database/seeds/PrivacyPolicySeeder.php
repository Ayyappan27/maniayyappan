<?php

use Illuminate\Database\Seeder;

class PrivacyPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('privacy_and_policies')->insert([
            [
                'language' => 'en',
                'content' => '<h1>Terms and conditions</h1> <p>1. Description of Service<br /> Making a decision to do something &ndash; this is the first step. We all know that nothing moves until someone makes a decision. The first action is always in making the decision to proceed.<br /> 2. Your Registration Obligations<br /> Focus is having the unwavering attention to complete what you set out to do. There are a million distractions in every facet of our lives. Telephones and e-mail, clients and managers, spouses and kids, TV, newspapers and radio &ndash; the distractions are everywhere and endless. Everyone wants a piece of us and the result can be totally overwhelming.<br /> 3. User Account, Password, and Security<br /> So, how can we stay on course with all the distractions in our lives? Willpower is a good start, but it&rsquo;s very difficult to stay on track simply through willpower.<br /> 4. User Conduct<br /> We also know those epic stories, those modern-day legends surrounding the early failures of such supremely successful folks as Michael Jordan and Bill Gates. We can look a bit further back in time to Albert Einstein or even further back to Abraham Lincoln. What made each of these people so successful? Motivation.</p> <ul> <li>If success is a process with a number of defined steps,</li> <li>Commit your decision to paper, just to bring it into focus.</li> <li>Without clarity, you send a very garbled message out to the Universe.</li> <li>You will run aground and become hopelessly stuck in the mud</li> <li>Simply by asking ourselves lots of questions</li> </ul> <p>5. International Use<br /> We also know those epic stories, those modern-day legends surrounding the early failures of such supremely successful folks as Michael Jordan and Bill Gates. We can look a bit further back in time to Albert Einstein or even further back to Abraham Lincoln. What made each of these people so successful? Motivation.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'language' => 'hi',
                'content' => '<h1>नियम और शर्तें</h1> <p> 1. सेवा का विवरण<br /> कुछ करने का निर्णय लेना & ndash; यह पहला चरण हैं। हम सभी जानते हैं कि जब तक कोई निर्णय नहीं लेता तब तक कुछ भी नहीं चलता है। आगे बढ़ने का निर्णय लेने में हमेशा पहली कार्रवाई होती है।<br /> 2. आपका पंजीकरण दायित्व <br /> आप जो करने के लिए तैयार हैं, उसे पूरा करने के लिए ध्यान का अटूट ध्यान है। हमारे जीवन के हर पहलू में एक लाख विक्षेप होते हैं। टेलीफोन और ई-मेल, ग्राहक और प्रबंधक, पति और बच्चे, टीवी, समाचार पत्र और रेडियो और ndash; विक्षेप हर जगह और अंतहीन हैं। हर कोई हमारा एक टुकड़ा चाहता है और परिणाम पूरी तरह से भारी हो सकता है.<br /> 3. उपयोगकर्ता खाता, पासवर्ड और सुरक्षा<br /> तो, हम अपने जीवन में सभी विकर्षणों के साथ कैसे रह सकते हैं? इच्छाशक्ति एक अच्छी शुरुआत है, लेकिन यह केवल इच्छाशक्ति के माध्यम से ट्रैक पर रहना बहुत मुश्किल है।<br /> 4. उपयोगकर्ता आचरण<br /> हम उन महाकाव्य कहानियों को भी जानते हैं, जो आधुनिक समय की किंवदंतियों में माइकल जॉर्डन और बिल गेट्स जैसे सर्वोच्च सफल लोगों की शुरुआती विफलताओं के आसपास हैं। हम अल्बर्ट आइंस्टीन के समय में थोड़ा आगे पीछे दिख सकते हैं या फिर अब्राहम लिंकन के आगे भी। इन लोगों में से प्रत्येक ने क्या सफल बनाया? प्रेरणा।</p> <ul> <li>यदि सफलता कई परिभाषित चरणों के साथ एक प्रक्रिया है,</li> <li>अपने निर्णय को कागज पर केंद्रित करें, बस इसे ध्यान में लाएं।</li> <li>स्पष्टता के बिना, आप ब्रह्मांड के लिए एक बहुत ही विकृत संदेश भेजते हैं।</li> <li>आप चारों ओर से भागेंगे और निराशा से कीचड़ में फंस जाएंगे</li> <li>बस अपने आप से बहुत सारे सवाल पूछकर</li> </ul> <p>5. अंतर्राष्ट्रीय उपयोग<br /> हम उन महाकाव्य कहानियों को भी जानते हैं, जो आधुनिक समय की किंवदंतियों में माइकल जॉर्डन और बिल गेट्स जैसे सर्वोच्च सफल लोगों की शुरुआती विफलताओं के आसपास हैं। हम अल्बर्ट आइंस्टीन के समय में थोड़ा आगे पीछे दिख सकते हैं या फिर अब्राहम लिंकन के आगे भी। इन लोगों में से प्रत्येक ने क्या सफल बनाया? प्रेरणा।</p>',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'language' => 'ar',
                'content' => '<h1>الأحكام والشروط</h1> <p> 1. وصف الخدمة<br /> اتخاذ قرار بفعل شيء ما - هذه أول خطوة. نعلم جميعًا أنه لا شيء يتحرك حتى يتخذ شخص ما قرارًا. يتمثل الإجراء الأول دائمًا في اتخاذ قرار المتابعة.<br /> 2. التزامات التسجيل الخاصة بك<br /> التركيز هو الحصول على الاهتمام الذي لا يتزعزع لإكمال ما تخطط للقيام به هناك مليون مصدر إلهاء في كل جانب من جوانب حياتنا. الهواتف والبريد الإلكتروني والعملاء والمديرين والأزواج والأطفال والتلفزيون والصحف والراديو & -؛ الإلهاءات في كل مكان ولا نهاية لها. الكل يريد قطعة منا والنتيجة يمكن أن تكون ساحقة تمامًا.<br /> 3. حساب المستخدم وكلمة المرور والأمان<br /> لذا ، كيف يمكننا أن نبقى على المسار الصحيح مع كل المشتتات في حياتنا؟ قوة الإرادة هي بداية جيدة ، ولكن من الصعب جدًا البقاء على المسار الصحيح ببساطة من خلال قوة الإرادة.<br /> 4. سلوك المستخدم<br /> نحن نعرف أيضًا تلك القصص الملحمية ، تلك الأساطير الحديثة التي تحيط بالفشل المبكر لأشخاص ناجحين للغاية مثل مايكل جوردان وبيل جيتس. يمكننا أن ننظر إلى الوراء قليلاً إلى الوراء إلى ألبرت أينشتاين أو حتى العودة إلى أبراهام لنكولن. ما الذي جعل كل من هؤلاء الأشخاص ناجحين جدًا؟ التحفيز.</p> <ul> 	<li>إذا كان النجاح عملية ذات عدد من الخطوات المحددة ،</li> 	<li>التزم بقرارك على الورق ، فقط لتركيزه عليه</li> 	<li>بدون وضوح ، ترسل رسالة مشوشة جدًا إلى الكون.</li> 	<li>سوف تهرع وتعلق في الوحل بلا أمل</li> 	<li>ببساطة عن طريق طرح الكثير من الأسئلة على أنفسنا</li> </ul> <p>5.الاستخدام الدولي<br /> نحن نعرف أيضًا تلك القصص الملحمية ، تلك الأساطير الحديثة التي تحيط بالفشل المبكر لأشخاص ناجحين للغاية مثل مايكل جوردان وبيل جيتس. يمكننا أن ننظر إلى الوراء قليلاً إلى الوراء إلى ألبرت أينشتاين أو حتى العودة إلى أبراهام لنكولن. ما الذي جعل كل من هؤلاء الأشخاص ناجحين جدًا؟ التحفيز.</p>',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
