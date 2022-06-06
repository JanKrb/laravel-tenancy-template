<?php

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

return [
    'accepted'             => 'Ezt a mezőt el kell fogadni.',
    'accepted_if'          => 'This field must be accepted when :other is :value.',
    'active_url'           => 'Ez nem érvényes URL.',
    'after'                => 'Ez egy dátum :date után.',
    'after_or_equal'       => 'Ennek :date után vagy azzal megegyező dátumnak kell lennie.',
    'alpha'                => 'Ez a mező csak betűket tartalmazhat.',
    'alpha_dash'           => 'Ez a mező csak betűket, számokat, kötőjeleket és aláhúzásokat tartalmazhat.',
    'alpha_num'            => 'Ez a mező csak betűket és számokat tartalmazhat.',
    'array'                => 'Ennek a mezőnek tömbnek kell lennie.',
    'before'               => 'Ez egy dátum :date előtt.',
    'before_or_equal'      => 'Ennek :date előtti vagy azzal egyenlő dátumnak kell lennie.',
    'between'              => [
        'array'   => 'This content must have between :min and :max items.',
        'file'    => 'This file must be between :min and :max kilobytes.',
        'numeric' => 'This value must be between :min and :max.',
        'string'  => 'This string must be between :min and :max characters.',
    ],
    'boolean'              => 'Ennek a mezőnek igaznak vagy hamisnak kell lennie.',
    'confirmed'            => 'A megerősítés nem egyezik.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'Ez nem érvényes dátum.',
    'date_equals'          => 'Ennek :date-nak kell lennie.',
    'date_format'          => 'Ez nem felel meg az :format formátumnak.',
    'declined'             => 'This value must be declined.',
    'declined_if'          => 'This value must be declined when :other is :value.',
    'different'            => 'Ennek az értéknek különböznie kell :other-től.',
    'digits'               => 'Ennek :digits számjegynek kell lennie.',
    'digits_between'       => 'Ennek :min és :max között kell lennie.',
    'dimensions'           => 'Ez a kép érvénytelen méretekkel rendelkezik.',
    'distinct'             => 'Ez a mező ismétlődő értékkel rendelkezik.',
    'email'                => 'Ennek érvényes e-mail címnek kell lennie.',
    'ends_with'            => 'Ennek az alábbiak egyikével kell végződnie: :values.',
    'enum'                 => 'The selected value is invalid.',
    'exists'               => 'A kiválasztott érték érvénytelen.',
    'file'                 => 'A tartalomnak fájlnak kell lennie.',
    'filled'               => 'Ennek a mezőnek kell legyen értéke.',
    'gt'                   => [
        'array'   => 'The content must have more than :value items.',
        'file'    => 'The file size must be greater than :value kilobytes.',
        'numeric' => 'The value must be greater than :value.',
        'string'  => 'The string must be greater than :value characters.',
    ],
    'gte'                  => [
        'array'   => 'The content must have :value items or more.',
        'file'    => 'The file size must be greater than or equal :value kilobytes.',
        'numeric' => 'The value must be greater than or equal :value.',
        'string'  => 'The string must be greater than or equal :value characters.',
    ],
    'image'                => 'Ez egy kép lehet.',
    'in'                   => 'A kiválasztott érték érvénytelen.',
    'in_array'             => 'Ez az érték nem létezik :other-ban.',
    'integer'              => 'Ennek egész számnak kell lennie.',
    'ip'                   => 'Ennek érvényes IP-címnek kell lennie.',
    'ipv4'                 => 'Ennek érvényes IPv4 címnek kell lennie.',
    'ipv6'                 => 'Ennek érvényes IPv6 címnek kell lennie.',
    'json'                 => 'Ez egy érvényes JSON karakterlánc lehet.',
    'lt'                   => [
        'array'   => 'The content must have less than :value items.',
        'file'    => 'The file size must be less than :value kilobytes.',
        'numeric' => 'The value must be less than :value.',
        'string'  => 'The string must be less than :value characters.',
    ],
    'lte'                  => [
        'array'   => 'The content must not have more than :value items.',
        'file'    => 'The file size must be less than or equal :value kilobytes.',
        'numeric' => 'The value must be less than or equal :value.',
        'string'  => 'The string must be less than or equal :value characters.',
    ],
    'mac_address'          => 'The value must be a valid MAC address.',
    'max'                  => [
        'array'   => 'The content must not have more than :max items.',
        'file'    => 'The file size must not be greater than :max kilobytes.',
        'numeric' => 'The value must not be greater than :max.',
        'string'  => 'The string must not be greater than :max characters.',
    ],
    'mimes'                => 'Ennek a következő típusú fájlnak kell lennie: :values.',
    'mimetypes'            => 'Ennek :values típusú fájlnak kell lennie.',
    'min'                  => [
        'array'   => 'The value must have at least :min items.',
        'file'    => 'The file size must be at least :min kilobytes.',
        'numeric' => 'The value must be at least :min.',
        'string'  => 'The string must be at least :min characters.',
    ],
    'multiple_of'          => 'Az értéknek :value többszörösének kell lennie',
    'not_in'               => 'A kiválasztott érték érvénytelen.',
    'not_regex'            => 'Ez a formátum érvénytelen.',
    'numeric'              => 'Ez egy szám lehet.',
    'password'             => 'A jelszó helytelen.',
    'present'              => 'Ennek a mezőnek jelen kell lennie.',
    'prohibited'           => 'Ez a mező tilos.',
    'prohibited_if'        => 'Ez a mező tilos, ha :other jelentése :value.',
    'prohibited_unless'    => 'Ez a mező tilos, kivéve, ha a :other :values-ben van.',
    'prohibits'            => 'This field prohibits :other from being present.',
    'regex'                => 'Ez a formátum érvénytelen.',
    'required'             => 'Ez a mező szükséges.',
    'required_array_keys'  => 'This field must contain entries for: :values.',
    'required_if'          => 'Erre a mezőre akkor van szükség, ha a :other :value.',
    'required_unless'      => 'Erre a mezőre csak akkor van szükség, ha a :other :values-ban van.',
    'required_with'        => 'Ez a mező akkor szükséges, ha :values van jelen.',
    'required_with_all'    => 'Ez a mező akkor szükséges, ha :values van jelen.',
    'required_without'     => 'Ez a mező akkor szükséges, ha :values nincs jelen.',
    'required_without_all' => 'Erre a mezőre akkor van szükség, ha egyik :values sincs jelen.',
    'same'                 => 'A mező értékének meg kell egyeznie az :other-es értékkel.',
    'size'                 => [
        'array'   => 'The content must contain :size items.',
        'file'    => 'The file size must be :size kilobytes.',
        'numeric' => 'The value must be :size.',
        'string'  => 'The string must be :size characters.',
    ],
    'starts_with'          => 'Ennek az alábbiak egyikével kell kezdődnie: :values.',
    'string'               => 'Ez biztos egy string.',
    'timezone'             => 'Ennek érvényes zónának kell lennie.',
    'unique'               => 'Ezt már elvitték.',
    'uploaded'             => 'Ez nem sikerült feltölteni.',
    'url'                  => 'Ez a formátum érvénytelen.',
    'uuid'                 => 'Ennek érvényes UUID-nak kell lennie.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
];
