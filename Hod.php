//shorcodes
function hod($attr){
extract( shortcode_atts( array (
		'title' => 'Head of the Department',
        'name' => 'Enter the Name',
        'photo' => 'Image missing',
        'qualification' => 'Enter the Qualification',
		'department'=>'Enter the Department',
		'pdf'=>''
    ),$attr) );
$photo=getImageThump($photo,"300x334");
$hodval ="<section><div class='hod-container'> <div class='hod-image'> <img  src='".$photo."' class='img-thumbnail' /> </div> <div class='hod-info'>";
	if(isset($title)&& $title!=""){
		$hodval.= "<h4>".$title."</h4>";
	}
	else{
		$title="Head of the Department";
		$hodval.= "<h4>".$title."</h4>";
	}
		$hodval.= "<span><i>Name :</i> <strong> ".$name."</strong></span><span><i>Qualification :</i><strong> ".$qualification."</strong></span>";
		$hodval.= "<span><i>Department :</i><strong> ".$department."</strong></span>";
		if(isset($pdf)&& $pdf!=""){
			$hodval.= "<span class='last'> <a class='btn btn-default' href='".$pdf."' target='_blank'>View Profile </a></span>";
		}	
	$hodval.= "</div> <div/></section>";	
echo  $hodval;
}
//this shortcode is used to display the HOD information
/*
[HOD ]
*/
add_shortcode('HOD','hod');

