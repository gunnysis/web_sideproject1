<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => '필드 :attribute은(는) 승인되어야 합니다.',
    'accepted_if' => '다른 필드 :other이(가) :value일 때 필드 :attribute은(는) 승인되어야 합니다.',
    'active_url' => '필드 :attribute은(는) 유효한 URL이어야 합니다.',
    'after' => '필드 :attribute은(는) :date 이후의 날짜여야 합니다.',
    'after_or_equal' => '필드 :attribute은(는) :date 이후이거나 동일한 날짜여야 합니다.',
    'alpha' => '필드 :attribute은(는) 문자만 포함해야 합니다.',
    'alpha_dash' => '필드 :attribute은(는) 문자, 숫자, 대시 및 언더스코어만 포함해야 합니다.',
    'alpha_num' => '필드 :attribute은(는) 문자와 숫자만 포함해야 합니다.',
    'array' => '필드 :attribute은(는) 배열이어야 합니다.',
    'ascii' => '필드 :attribute은(는) 단일 바이트 알파벳 및 기호만 포함해야 합니다.',
    'before' => '필드 :attribute은(는) :date 이전의 날짜여야 합니다.',
    'before_or_equal' => '필드 :attribute은(는) :date 이전이거나 동일한 날짜여야 합니다.',
    'between' => [
        'array' => '필드 :attribute은(는) :min에서 :max 사이의 항목을 가져야 합니다.',
        'file' => '필드 :attribute은(는) :min에서 :max 킬로바이트 사이여야 합니다.',
        'numeric' => '필드 :attribute은(는) :min에서 :max 사이여야 합니다.',
        'string' => '필드 :attribute은(는) :min에서 :max 문자 사이여야 합니다.',
    ],
    'boolean' => '필드 :attribute은(는) true 또는 false 여야 합니다.',
    'can' => '필드 :attribute은(는) 허용되지 않은 값이 포함되어 있습니다.',
    'confirmed' => '필드 :attribute의 확인이 일치하지 않습니다.',
    'current_password' => '비밀번호가 올바르지 않습니다.',
    'date' => '필드 :attribute은(는) 유효한 날짜여야 합니다.',
    'date_equals' => '필드 :attribute은(는) :date와 동일한 날짜여야 합니다.',
    'date_format' => '필드 :attribute은(는) :format 형식과 일치해야 합니다.',
    'decimal' => '필드 :attribute은(는) :decimal 자리수를 가져야 합니다.',
    'declined' => '필드 :attribute은(는) 거부되어야 합니다.',
    'declined_if' => '다른 필드 :other이(가) :value일 때 필드 :attribute은(는) 거부되어야 합니다.',
    'different' => '필드 :attribute과(와) :other은(는) 서로 달라야 합니다.',
    'digits' => '필드 :attribute은(는) :digits 자리 숫자여야 합니다.',
    'digits_between' => '필드 :attribute은(는) :min에서 :max 자리 숫자 사이여야 합니다.',
    'dimensions' => '필드 :attribute은(는) 유효하지 않은 이미지 차원을 갖고 있습니다.',
    'distinct' => '필드 :attribute은(는) 중복된 값이 있습니다.',
    'doesnt_end_with' => '필드 :attribute은(는) 다음 중 하나로 끝나지 않아야 합니다: :values.',
    'doesnt_start_with' => '필드 :attribute은(는) 다음 중 하나로 시작하지 않아야 합니다: :values.',
    'email' => '필드 :attribute은(는) 유효한 이메일 주소여야 합니다.',
    'ends_with' => '필드 :attribute은(는) 다음 중 하나로 끝나야 합니다: :values.',
    'enum' => '선택한 :attribute은(는) 유효하지 않습니다.',
    'exists' => '선택한 :attribute은(는) 유효하지 않습니다.',
    'extensions' => '필드 :attribute은(는) 다음 중 하나의 확장자여야 합니다: :values.',
    'file' => '필드 :attribute은(는) 파일이어야 합니다.',
    'filled' => '필드 :attribute은(는) 값이 있어야 합니다.',
    'gt' => [
        'array' => '필드 :attribute은(는) :value개 이상의 항목을 가져야 합니다.',
        'file' => '필드 :attribute은(는) :value 킬로바이트보다 커야 합니다.',
        'numeric' => '필드 :attribute은(는) :value보다 커야 합니다.',
        'string' => '필드 :attribute은(는) :value보다 길어야 합니다.',
    ],
    'gte' => [
        'array' => '필드 :attribute은(는) :value개 이상의 항목이어야 합니다.',
        'file' => '필드 :attribute은(는) :value 킬로바이트 이상이어야 합니다.',
        'numeric' => '필드 :attribute은(는) :value 이상이어야 합니다.',
        'string' => '필드 :attribute은(는) :value 이상의 길이여야 합니다.',
    ],
    'hex_color' => '필드 :attribute은(는) 유효한 16진수 색상이어야 합니다.',
    'image' => '필드 :attribute은(는) 이미지여야 합니다.',
    'in' => '선택한 :attribute은(는) 유효하지 않습니다.',
    'in_array' => '필드 :attribute은(는) :other에 존재하지 않습니다.',
    'integer' => '필드 :attribute은(는) 정수여야 합니다.',
    'ip' => '필드 :attribute은(는) 유효한 IP 주소여야 합니다.',
    'ipv4' => '필드 :attribute은(는) 유효한 IPv4 주소여야 합니다.',
    'ipv6' => '필드 :attribute은(는) 유효한 IPv6 주소여야 합니다.',
    'json' => '필드 :attribute은(는) 유효한 JSON 문자열이어야 합니다.',
    'list' => '필드 :attribute은(는) 목록이어야 합니다.',
    'lowercase' => '필드 :attribute은(는) 소문자여야 합니다.',
    'lt' => [
        'array' => '필드 :attribute은(는) :value개 미만의 항목을 가져야 합니다.',
        'file' => '필드 :attribute은(는) :value 킬로바이트보다 작아야 합니다.',
        'numeric' => '필드 :attribute은(는) :value보다 작아야 합니다.',
        'string' => '필드 :attribute은(는) :value보다 짧아야 합니다.',
    ],
    'lte' => [
        'array' => '필드 :attribute은(는) :value개 이하의 항목이어야 합니다.',
        'file' => '필드 :attribute은(는) :value 킬로바이트 이하이어야 합니다.',
        'numeric' => '필드 :attribute은(는) :value 이하이어야 합니다.',
        'string' => '필드 :attribute은(는) :value 이하의 길이여야 합니다.',
    ],
    'mac_address' => '필드 :attribute은(는) 유효한 MAC 주소여야 합니다.',
    'max' => [
        'array' => '필드 :attribute은(는) :max개를 초과할 수 없습니다.',
        'file' => '필드 :attribute은(는) :max 킬로바이트보다 클 수 없습니다.',
        'numeric' => '필드 :attribute은(는) :max보다 클 수 없습니다.',
        'string' => '필드 :attribute은(는) :max자보다 클 수 없습니다.',
    ],
    'max_digits' => '필드 :attribute은(는) :max 자리 숫자를 초과할 수 없습니다.',
    'mimes' => '필드 :attribute은(는) 다음 유형의 파일이어야 합니다: :values.',
    'mimetypes' => '필드 :attribute은(는) 다음 유형의 파일이어야 합니다: :values.',
    'min' => [
        'array' => '필드 :attribute은(는) 최소한 :min개의 항목이 있어야 합니다.',
        'file' => '필드 :attribute은(는) 최소한 :min 킬로바이트 이상이어야 합니다.',
        'numeric' => '필드 :attribute은(는) 최소한 :min 이어야 합니다.',
        'string' => '필드 :attribute은(는) 최소한 :min자 이어야 합니다.',
    ],
    'min_digits' => '필드 :attribute은(는) 최소한 :min 자리 숫자를 가져야 합니다.',
    'missing' => '필드 :attribute은(는) 없어야 합니다.',
    'missing_if' => '다른 필드 :other이(가) :value일 때 필드 :attribute은(는) 없어야 합니다.',
    'missing_unless' => '다른 필드 :other이(가) :value가 아닐 때 필드 :attribute은(는) 없어야 합니다.',
    'missing_with' => '다른 값 :values이(가) 존재할 때 필드 :attribute은(는) 없어야 합니다.',
    'missing_with_all' => '다른 값 :values가 모두 존재할 때 필드 :attribute은(는) 없어야 합니다.',
    'multiple_of' => '필드 :attribute은(는) :value의 배수여야 합니다.',
    'not_in' => '선택한 :attribute은(는) 유효하지 않습니다.',
    'not_regex' => '필드 :attribute의 형식이 올바르지 않습니다.',
    'numeric' => '필드 :attribute은(는) 숫자여야 합니다.',
    'password' => [
        'letters' => '필드 :attribute은(는) 최소한 하나의 문자를 포함해야 합니다.',
        'mixed' => '필드 :attribute은(는) 최소한 하나의 대문자와 하나의 소문자를 포함해야 합니다.',
        'numbers' => '필드 :attribute은(는) 최소한 하나의 숫자를 포함해야 합니다.',
        'symbols' => '필드 :attribute은(는) 최소한 하나의 기호를 포함해야 합니다.',
        'uncompromised' => '주어진 :attribute은(는) 데이터 유출에 나타난 것입니다. 다른 :attribute을(를) 선택하십시오.',
    ],
    'present' => '필드 :attribute은(는) 존재해야 합니다.',
    'present_if' => '다른 필드 :other이(가) :value일 때 필드 :attribute은(는) 존재해야 합니다.',
    'present_unless' => '다른 필드 :other이(가) :value가 아닐 때 필드 :attribute은(는) 존재해야 합니다.',
    'present_with' => '다른 값 :values이(가) 존재할 때 필드 :attribute은(는) 존재해야 합니다.',
    'present_with_all' => '다른 값 :values가 모두 존재할 때 필드 :attribute은(는) 존재해야 합니다.',
    'prohibited' => '필드 :attribute은(는) 금지되어 있습니다.',
    'prohibited_if' => '다른 필드 :other이(가) :value일 때 필드 :attribute은(는) 금지되어 있습니다.',
    'prohibited_unless' => '다른 필드 :other이(가) :values에 속하지 않을 때 필드 :attribute은(는) 금지되어 있습니다.',
    'prohibits' => '필드 :attribute은(는) :other가 존재하는 경우 금지됩니다.',
    'regex' => '필드 :attribute의 형식이 올바르지 않습니다.',
    'required' => '필드 :attribute은(는) 필수입니다.',
    'required_array_keys' => '필드 :attribute은(는) 다음 항목을 포함해야 합니다: :values.',
    'required_if' => '다른 필드 :other이(가) :value일 때 필드 :attribute은(는) 필수입니다.',
    'required_if_accepted' => '다른 필드 :other이(가) 승인되었을 때 필드 :attribute은(는) 필수입니다.',
    'required_unless' => '다른 필드 :other이(가) :values에 속할 때 필드 :attribute은(는) 필수입니다.',
    'required_with' => '다른 값 :values이(가) 존재할 때 필드 :attribute은(는) 필수입니다.',
    'required_with_all' => '다른 값 :values가 모두 존재할 때 필드 :attribute은(는) 필수입니다.',
    'required_without' => '다른 값 :values이(가) 존재하지 않을 때 필드 :attribute은(는) 필수입니다.',
    'required_without_all' => '다른 값 :values가 모두 존재하지 않을 때 필드 :attribute은(는) 필수입니다.',
    'same' => '필드 :attribute은(는) :other와(과) 일치해야 합니다.',
    'size' => [
        'array' => '필드 :attribute은(는) :size개의 항목을 포함해야 합니다.',
        'file' => '필드 :attribute은(는) :size 킬로바이트여야 합니다.',
        'numeric' => '필드 :attribute은(는) :size여야 합니다.',
        'string' => '필드 :attribute은(는) :size자여야 합니다.',
    ],
    'starts_with' => '필드 :attribute은(는) 다음 중 하나로 시작해야 합니다: :values.',
    'string' => '필드 :attribute은(는) 문자열이어야 합니다.',
    'timezone' => '필드 :attribute은(는) 유효한 시간대여야 합니다.',
    'unique' => '필드 :attribute이(가) 이미 사용되었습니다.',
    'uploaded' => '필드 :attribute을(를) 업로드하지 못했습니다.',
    'uppercase' => '필드 :attribute은(는) 대문자여야 합니다.',
    'url' => '필드 :attribute은(는) 유효한 URL이어야 합니다.',
    'ulid' => '필드 :attribute은(는) 유효한 ULID여야 합니다.',
    'uuid' => '필드 :attribute은(는) 유효한 UUID여야 합니다.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    'attributes' => [],


];
