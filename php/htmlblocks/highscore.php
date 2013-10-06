<table>											
<?php 
//set ranking number to zero
$rank = 0;	

//for each user in highscore -> run code
foreach($usersForHighscore as $user)
{
	//count + 1 at last ranking number
	$rank++;
	
	//when rank-number reaches 251 -> break code
	if($rank > 250)
	{
		
	}

	//when rank-number is below 251 -> create a highscore row 
	else
	{		
		//when rank-number is odd -> run code
		if($odd = $rank%2)
		{
		    //set a dark background color for highscore-row
		    $rowColor = '#fff;';
		}
		
		//when rank-number is even -> run code
		else
		{	
			//set a light background color for highscore-row
			//mensen kunnen berichtjes achterlaten op een plek (adhv coordinaten)
		    $rowColor = 'fbfbfb;';
		}
		
			//echo highscore-row
			echo '	<tr>
													
						<td class="rankRow" style="background-color: '.$rowColor.';">
							
							<span>'.$rank.'</span> 
															
						</td>
														
						<td style="background-color: '.$rowColor.';">
																
							<span class="nameRow"><img src="img/ratingstar.png" alt="Star" class="star" />'.$user["userName"].'</span>
																	
						</td>
														
						<td class="xppRow" style="background-color: '.$rowColor.';">
									
							<span class="xppRow">'.$user["amountOfXPP"].'</span>
										
						</td>
														
					</tr>						
				 ';
	}
			
}
?>		
</table>