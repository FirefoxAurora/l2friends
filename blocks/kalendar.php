<?
function GetToday()
{
	$Color = '<FONT COLOR= >';
	$Endcolor = '</FONT>';

	$RuMonth = array (
			'01'=>'','02'=>'February','03'=>'March',
			'04'=>'April','05'=>'May','06'=>'June','07'=>'July',
			'08'=>'August','09'=>'September','10'=>'October',
			'11'=>'November','12'=>'December'
			);

	$Month = $RuMonth[date("m")];

	$RuWeek = array (
			'1'=>'Monday',
			'2'=>'Tuesday',
			'3'=>'Wednesday',
			'4'=>'Thursday',
			'5'=>'Friday',
			'6'=>'Saturday',
			'0'=>'Sunday',
			);

	$Week = $RuWeek[date("w")];

	$CheckHollydays = array (
			'3012'=>'Since coming'.date(date("Y")+1).' Year!',
			'3112'=>'The new'.date(date("Y")+1).' Year!',
			'0101'=>'Happy new'.date("Y").' Year!',
			'0201'=>'Happy new'.date("Y").' Year!',
			'0701'=>'Marry Christmass!',
			);

	if (isset($CheckHollydays[date("dm")]))
	{
		$Hollydays = $CheckHollydays[date("dm")];
		$Color = '<FONT COLOR=RED>';
		$Endcolor= '</FONT>';
	}
	else
		$Hollydays = '';

$Data = "$Color Today: $Week ".date ("d $Month ")."$Hollydays$Endcolor"";
return $Data;
}

?>

<?=GetToday(); ?>


