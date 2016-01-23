<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| such as the size rules. Feel free to tweak each of these messages.
	|
	*/

	"accepted"         => ":attribute debe ser aceptado.",
	"active_url"       => ":attribute no es un URL válido.",
	"after"            => ":attribute debe ser una fecha posterior a :date.",
	"alpha"            => ":attribute solo debe contener letras.",
	"alpha_dash"       => ":attribute solo puede contener letras, números y guiones.",
	"alpha_num"        => ":attribute solo puede contener letras y números.",
	"array"            => ":attribute debe ser un vector.",
	"before"           => ":attribute debe ser una fecha anterior a :date.",
	"between"          => array(
		"numeric" => ":attribute debe estar entre :min - :max.",
		"file"    => ":attribute debe estar entre :min - :max kilobytes.",
		"string"  => ":attribute debe estar entre :min - :max characters.",
		"array"   => ":attribute debe estar entre :min - :max items.",
	),
	"confirmed"        => ":attribute no coincide para la confirmación.",
	"date"             => ":attribute no es una fecha válida.",
	"date_format"      => ":attribute no es del formato :format.",
	"different"        => ":attribute y :other deben ser diferentes.",
	"digits"           => ":attribute debe ser de :digits dígitos.",
	"digits_between"   => ":attribute debe estar entre :min y :max dígitos.",
	"email"            => ":attribute no es una dirección válida.",
	"exists"           => ":attribute ya existe, seleccione otro.",
	"image"            => ":attribute debe ser un archivo de imagen.",
	"in"               => ":attribute es inválido.",
	"integer"          => ":attribute debe ser un entero.",
	"ip"               => ":attribute no es una dirección IP válida.",
	"max"              => array(
		"numeric" => ":attribute no puede ser mayor que :max.",
		"file"    => ":attribute no debe sermayor que :max kilobytes.",
		"string"  => ":attribute no debe ser mayor que :max caracteres.",
		"array"   => ":attribute no puede tener mas de :max items.",
	),
	"mimes"            => ":attribute debe ser del tipo: :values.",
	"min"              => array(
		"numeric" => ":attribute debe ser mayor a :min.",
		"file"    => ":attribute debe tener al menos :min kilobytes.",
		"string"  => ":attribute debe ser mayor a :min caracteres.",
		"array"   => "The :attribute must have at least :min items.",
	),
	"not_in"           => "The selected :attribute is invalid.",
	"numeric"          => "The :attribute must be a number.",
	"regex"            => ":attribute no tiene un formato válido.",
	"required"         => ":attribute es obligatorio.",
	"required_if"      => ":attribute es requerido por :other cuando vale :value.",
	"required_with"    => ":attribute es requerido cuando :values está presente.",
	"required_without" => ":attribute es requerido cuando :values no está presente.",
	"same"             => ":attribute y :other deben coincidir.",
	"size"             => array(
		"numeric" => ":attribute debe ser de :size.",
		"file"    => ":attribute debe ser de :size kilobytes.",
		"string"  => ":attribute debe ser de :size caracteres.",
		"array"   => ":attribute debe ser de :size items.",
	),
	"unique"           => ":attribute ya existe.",
	"url"              => ":attribute no tiene un formato válido.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
