<?php

define('REGEX_STRINGS', '/^[A-Za-z0-9\à\á\â\ä\ç\è\é\ê\ë\ì\í\î\ï\ñ\ò\ó\ô\ö\ù\ú\û\ü\-\.\_\ \!\?\,\'\;\:\s\r\n\b\t\v\f\<\>\(br \/)]+$/');
define('REGEX_EMAIL','/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/');
define('REGEX_PHONE','/^(0|\+33)([0-9]{9,10})$/');
define('REGEX_CP','/^[0-9]{5}$/');
define('REGEX_DIPLOMA','/^[A-Za-z0-9\-\_]+$/');
define('REGEX_POLE_EMPLOI','/^[A-Za-z0-9]{8,12}$/');
define('REGEX_URL','/^((?:(?:https?|http):\/\/)(?:w{3}|[A-Za-z0-9]+)\.[a-z]{1,12}(?:\ ?|\s?|\,?|\;?|\-?|\_?|\~?|\+?|\/?|\*?|\.?|\:?|\%))+$iuS/');
define('REGEX_DATE','/^\d{1,2}\/\d{1,2}\/\d{4}$/');
define('REGEX_ADRESS','/^([0-9]+)((,|,\s|\s)([A-Za-z0-9\à\á\â\ä\ç\è\é\ê\ë\ì\í\î\ï\ñ\ò\ó\ô\ö\ù\ú\û\ü\-\_\']+))*$/');
define('REGEX_CITY', '/^([A-Za-z0-9\à\á\â\ä\ç\è\é\ê\ë\ì\í\î\ï\ñ\ò\ó\ô\ö\ù\ú\û\ü\-\_\']+)*$/');