<?php

return [

    /*
    |--------------------------------------------------------------------------
    | رسائل التحقق
    |--------------------------------------------------------------------------
    |
    | تحتوي الأسطر التالية على رسائل الخطأ الافتراضية المستخدمة من قبل
    | صنف التحقق. بعض هذه القواعد تحتوي على عدة نسخ مثل قواعد الحجم.
    | لا تتردد في تعديل أي من هذه الرسائل حسب متطلبات التطبيق الخاص بك.
    |
    */

    'accepted' => 'يجب قبول :attribute.',
    'active_url' => ':attribute ليس رابطاً صالحاً.',
    'after' => 'يجب أن يكون :attribute تاريخاً بعد :date.',
    'after_or_equal' => 'يجب أن يكون :attribute تاريخاً بعد أو يساوي :date.',
    'alpha' => 'يجب أن يحتوي :attribute على أحرف فقط.',
    'alpha_dash' => 'يجب أن يحتوي :attribute على أحرف، أرقام، شرطات وشرطات سفلية فقط.',
    'alpha_num' => 'يجب أن يحتوي :attribute على أحرف وأرقام فقط.',
    'array' => 'يجب أن يكون :attribute مصفوفة.',
    'before' => 'يجب أن يكون :attribute تاريخاً قبل :date.',
    'before_or_equal' => 'يجب أن يكون :attribute تاريخاً قبل أو يساوي :date.',
    'between' => [
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يكون طول النص :attribute بين :min و :max حرفاً.',
        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max.',
    ],
    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false.',
    'confirmed' => 'تأكيد :attribute غير متطابق.',
    'date' => ':attribute ليس تاريخاً صالحاً.',
    'date_equals' => 'يجب أن يكون :attribute تاريخاً يساوي :date.',
    'date_format' => 'لا يتطابق :attribute مع الشكل :format.',
    'different' => 'يجب أن يكون :attribute و :other مختلفين.',
    'digits' => 'يجب أن يحتوي :attribute على :digits أرقام.',
    'digits_between' => 'يجب أن يحتوي :attribute على عدد من الأرقام بين :min و :max.',
    'dimensions' => 'أبعاد صورة :attribute غير صالحة.',
    'distinct' => 'حقل :attribute يحتوي على قيمة مكررة.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صالح.',
    'ends_with' => 'يجب أن ينتهي :attribute بأحد القيم التالية: :values.',
    'exists' => ':attribute المحدد غير صالح.',
    'file' => 'يجب أن يكون :attribute ملفاً.',
    'filled' => 'حقل :attribute يجب أن يحتوي على قيمة.',
    'gt' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :value.',
        'file' => 'يجب أن يكون حجم ملف :attribute أكبر من :value كيلوبايت.',
        'string' => 'يجب أن يكون طول نص :attribute أكبر من :value حرفاً.',
        'array' => 'يجب أن يحتوي :attribute على أكثر من :value عنصر.',
    ],
    'gte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من أو تساوي :value.',
        'file' => 'يجب أن يكون حجم ملف :attribute أكبر من أو يساوي :value كيلوبايت.',
        'string' => 'يجب أن يكون طول نص :attribute أكبر من أو يساوي :value حرفاً.',
        'array' => 'يجب أن يحتوي :attribute على :value عنصر أو أكثر.',
    ],
    'image' => 'يجب أن يكون :attribute صورة.',
    'in' => ':attribute المحدد غير صالح.',
    'in_array' => 'حقل :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون :attribute عدداً صحيحاً.',
    'ip' => 'يجب أن يكون :attribute عنوان IP صالح.',
    'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صالح.',
    'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صالح.',
    'json' => 'يجب أن يكون :attribute نص JSON صالح.',
    'lt' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أقل من :value.',
        'file' => 'يجب أن يكون حجم ملف :attribute أقل من :value كيلوبايت.',
        'string' => 'يجب أن يكون طول نص :attribute أقل من :value حرفاً.',
        'array' => 'يجب أن يحتوي :attribute على أقل من :value عنصر.',
    ],
    'lte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أقل من أو تساوي :value.',
        'file' => 'يجب أن يكون حجم ملف :attribute أقل من أو يساوي :value كيلوبايت.',
        'string' => 'يجب أن يكون طول نص :attribute أقل من أو يساوي :value حرفاً.',
        'array' => 'يجب ألا يحتوي :attribute على أكثر من :value عنصر.',
    ],
    'max' => [
        'numeric' => 'يجب ألا تكون قيمة :attribute أكبر من :max.',
        'file' => 'يجب ألا يكون حجم ملف :attribute أكبر من :max كيلوبايت.',
        'string' => 'يجب ألا يكون طول نص :attribute أكبر من :max حرفاً.',
        'array' => 'يجب ألا يحتوي :attribute على أكثر من :max عنصر.',
    ],
    'mimes' => 'يجب أن يكون :attribute ملفاً من نوع: :values.',
    'mimetypes' => 'يجب أن يكون :attribute ملفاً من نوع: :values.',
    'min' => [
        'numeric' => 'يجب أن تكون قيمة :attribute على الأقل :min.',
        'file' => 'يجب أن يكون حجم ملف :attribute على الأقل :min كيلوبايت.',
        'string' => 'يجب أن يكون طول نص :attribute على الأقل :min حرفاً.',
        'array' => 'يجب أن يحتوي :attribute على الأقل :min عنصر.',
    ],
    'not_in' => ':attribute المحدد غير صالح.',
    'not_regex' => 'صيغة :attribute غير صالحة.',
    'numeric' => 'يجب أن يكون :attribute رقماً.',
    'password' => 'كلمة المرور غير صحيحة.',
    'present' => 'يجب تقديم حقل :attribute.',
    'regex' => 'صيغة :attribute غير صالحة.',
    'required' => 'حقل :attribute مطلوب.',
    'required_if' => 'حقل :attribute مطلوب عندما يكون :other هو :value.',
    'required_unless' => 'حقل :attribute مطلوب ما لم يكن :other ضمن :values.',
    'required_with' => 'حقل :attribute مطلوب عندما تكون :values موجودة.',
    'required_with_all' => 'حقل :attribute مطلوب عندما تكون :values موجودة.',
    'required_without' => 'حقل :attribute مطلوب عندما لا تكون :values موجودة.',
    'required_without_all' => 'حقل :attribute مطلوب عندما لا تكون أي من :values موجودة.',
    'same' => 'يجب أن يتطابق :attribute مع :other.',
    'size' => [
        'numeric' => 'يجب أن تكون قيمة :attribute تساوي :size.',
        'file' => 'يجب أن يكون حجم ملف :attribute :size كيلوبايت.',
        'string' => 'يجب أن يحتوي نص :attribute على :size حرفاً.',
        'array' => 'يجب أن يحتوي :attribute على :size عنصر.',
    ],
    'starts_with' => 'يجب أن يبدأ :attribute بأحد القيم التالية: :values.',
    'string' => 'يجب أن يكون :attribute نصاً.',
    'timezone' => 'يجب أن يكون :attribute نطاقاً زمنياً صالحاً.',
    'unique' => 'تم استخدام :attribute مسبقاً.',
    'uploaded' => 'فشل في تحميل :attribute.',
    'url' => 'صيغة :attribute غير صالحة.',
    'uuid' => 'يجب أن يكون :attribute UUID صالح.',

    /*
    |--------------------------------------------------------------------------
    | رسائل تحقق مخصصة
    |--------------------------------------------------------------------------
    |
    | يمكنك تحديد رسائل تحقق مخصصة لخصائص محددة باستخدام الصيغة
    | "attribute.rule" لتسمية الأسطر. يساعد هذا في تخصيص الرسائل بشكل أكبر.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'رسالة مخصصة',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | أسماء السمات المخصصة
    |--------------------------------------------------------------------------
    |
    | تساعد الأسطر التالية في استبدال أسماء السمات في الرسائل
    | بشيء أكثر وضوحًا مثل "عنوان البريد الإلكتروني" بدلاً من "email".
    |
    */

    'attributes' => [],

];
