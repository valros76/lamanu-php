//On récupère le nouveau JSON
$json_datas = file_get_contents($json_path);
$parsed_json = json_decode($json_datas);
$nb_json_objects = count($parsed_json->{'files'}->{'name'});
for ($idx = 0; $idx < $nb_json_objects; $idx++) { $unit='ko' ; switch (true) { case (ceil($parsed_json->{'files'}->{'size'}[$idx] / 1024) <= 8): $unit='o' ; break; case (ceil($parsed_json->{'files'}->{'size'}[$idx] / 1024) > 8 && ceil($parsed_json->{'files'}->{'size'}[$idx] / 1024) <= 1024): $unit='ko' ; break; case (ceil($parsed_json->{'files'}->{'size'}[$idx] / 1024) > 1024 && ceil($parsed_json->{'files'}->{'size'}[$idx] / 1024) <= 1048576): $unit='Mo' ; break; case (ceil($parsed_json->{'files'}->{'size'}[$idx] / 1048576) > 1024 && ceil($parsed_json->{'files'}->{'size'}[$idx] / 1024) <= 1073741824): $unit='Go' ; break; default: $unit='ko' ; } echo '<p>
            Name : ' . $parsed_json->{'files'}->{'name'}[$idx] . '<br />
               Temporary name : ' . $parsed_json->{'files'}->{'tmp_name'}[$idx] . '<br />
               Extension : ' . $parsed_json->{'files'}->{'extension'}[$idx] . '<br />
               Errors :' . $parsed_json->{'files'}->{'error'}[$idx] . '<br />
               Size : ' . ceil($parsed_json->{'files'}->{'size'}[$idx] / 1024) . $unit . '<br />
               </p>';
               }