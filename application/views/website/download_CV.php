<?php
$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('My CV');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetHeaderMargin(200);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
$pdf->AddPage();
/* Start Create New CV */

/* Set JPEG Quality */
$pdf->setJPEGQuality(75);
$img = base_url().'media_library/user_images/'.$resume_details['profile_picture_thumb'];

$first_name = $resume_details['first_name'];
$last_name = $resume_details['last_name'];
$resume_title = $resume_details['resume_title'];
$mobile = $resume_details['mobile'];
$email = $resume_details['email'];

$tbl = <<<EOD
<table cellspacing="0" cellpadding="1">
    <tr>
        <td width="420"> $first_name $last_name <br> $resume_title <br> 0$mobile <br> $email</td>
        <td><img src="$img" height="100" width="100"/></td>
    </tr>
</table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');

$html = '<div style="font-size:13px;padding-top:20px">'.'Carrier Summary:</div>';
$html .= '<span style="font-size:10px;padding:none">'. $resume_details['summary'].'</span><br><br>';
$html .= '<span style="font-size:13px;padding-top:10px">'.'Experiences:</span>';
$html .= '<br>';

foreach($resume_details['experiences'] as $experience) {
    $html .= '<span>'.$experience['designation'].'</span><br>';
    $html .= '<span>'.$experience['company_name'].'</span><br>';
    $html .= '<span>'.$experience['start_date'].'</span> - ';
    $html .= '<span>'.$experience['end_date'].'</span><br>';
    $html .= '<span style="font-size:10px;padding:none">'. $experience['responsibilities'].'</span><br><br>';
}

$html .= '<span style="font-size:13px;padding-top:10px">'.'Educations:</span><br><br>';
$html .='<table cellspacing="0" cellpadding="2" border="1">
        <tr>
           <td style="font-size:10pt">Exam Name</td>
           <td style="font-size:10pt">Institute Name</td>
           <td style="font-size:10pt">Major</td>
           <td style="font-size:10pt">Result</td>
           <td style="font-size:10pt">Year</td>
        </tr>
';
foreach($resume_details['educations'] as $education) {
    $html .= '<tr><td style="font-size:9pt">'.$education['certification_name'].'</td>';
    $html .= '<td style="font-size:9pt">'.$education['institute_name'].'</td>';
    $html .= '<td style="font-size:9pt">'.$education['major'].'</td>';
    $html .= '<td style="font-size:9pt">'.$education['result'].'</td>';
    $html .= '<td style="font-size:9pt">'.$education['year'].'</td>';
    $html .= '</tr>';
    
}
$html .='</table><br><br>';
$html .= '<span style="font-size:13px;padding-top:10px">'.'Certifications:</span>';
foreach($resume_details['certifications'] as $certification) {
    $html .= '<br><span style="font-size:10px;">'.$certification['name'].'</span><br>';
    $html .= '<span style="font-size:10px;">'.$certification['location'].'</span><br>';
    $html .= '<span style="font-size:10px;">'.$certification['period'].'</span><br>';
}
$html .= '<br>';

$html .= '<span style="font-size:13px;">Skills:</span><br/>';
foreach($resume_details['skills'] as $skill) {
    $html .= '<span>'.$skill['name'].'</span><br>';
    $html .= '<span style="font-size:10px;padding:none">'.$skill['description'].'</span><br>';
}
$html .= '<br>';
$html .= '<span style="font-size:13px;">Portfolios:</span><br />';
foreach($resume_details['portfolios'] as $portfolio) {
    $html .= '<span style="font-size:11px">'.$portfolio['name'].'</span><br>';
    $html .= '<span style="font-size:11px">'.$portfolio['link'].'</span><br>';
    $html .= '<span style="font-size:10px">'.$portfolio['description'].'</span><br>';
}
$html .= '<br>';
$html .= '<span style="font-size:13px;">Languages:</span><br>';
foreach($resume_details['languages'] as $language) {
    $html .= '<span style="font-size:10px">'.$language['name'].'</span><br>';
}
$html .= '<br>';
$html .= '<span style="font-size:13px;">Memberships:</span><br>';
foreach($resume_details['memberships'] as $membership) {
    $html .= '<span style="font-size:11px;">'.$membership['name'].'</span><br>';
    $html .= '<span style="font-size:10px;">'.$membership['institute'].'</span><br>';
    $html .= '<span style="font-size:10px;">'.$membership['expiry_date'].'</span><br>';
}
$html .= '<br>';
$html .= '<span style="font-size:13px;">Hobbies and Interests:</span><br>';
foreach($resume_details['hobbies_and_interests'] as $hobbies) {
    $html .= '<span>'.$hobbies['name'].'</span><br>';
    $html .= '<span>'.$hobbies['description'].'</span><br>';
}
$html .= '<br>';
$html .= '<span style="font-size:13px;">Honors and Awards:</span><br>';
foreach($resume_details['honors_and_awards'] as $honors) {
    $html .= '<span>'.$honors['name'].'</span><br>';
    $html .= '<span>'.$honors['date'].'</span><br><br>';
}

$html .= '</span>Personal Information: </span><br>';
$html .= '<span style="font-size:10px;">Fathers Name:'.$resume_details['father_name'].'</span><br>';
$html .= '<span style="font-size:10px;">Mothers Name:'.$resume_details['mother_name'].'</span><br>';
$html .= '<span style="font-size:10px;">Date of Birth:'.$resume_details['date_of_birth'].'</span><br>';
$html .= '<span style="font-size:10px;">Religion:'.$resume_details['religion'].'</span><br>';
$html .= '<span style="font-size:10px;">Marital Status:'.$resume_details['marital_status'].'</span><br>';
$html .= '<span style="font-size:10px;">Nationality:'.$resume_details['nationality'].'</span><br>';
$html .= '<span style="font-size:10px;">Permanent Address:'.$resume_details['permanent_address'].'</span><br>';
$html .= '<span style="font-size:10px;">Present City:'.$resume_details['present_city'].'</span><br>';
$html .= '<span style="font-size:10px;">Current Career Level:'.$resume_details['current_career_level'].'</span><br>';

$html .= '
    <style>
        span{
            font-size: 11pt;
        }
    </style>
    ';
/** End of Create New CV **/
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('My-CV.pdf', 'I').'<br>';