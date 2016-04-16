        <style>
            .font0 {
				font-family: helvetica;
                font-size: 10px;
            }            
            table, td, tr
            {
				font-family: helvetica;
                border: 1px solid #AFB1B3;
            }
            td{
				font-family: helvetica;
                padding: 2px 5px;
                   border-right: 0 none;
            }
            table{width: 100%;font-family: helvetica;}
            
           @media print {
            body {-webkit-print-color-adjust: exact;}
            .break-page { page-break-before: always; } 
            tr {
              -webkit-print-color-adjust: exact; 
            }
           } 
        </style>
        <script>
window.print();          
        </script>
<div style="background-color:#FFFFFF; margin: 0 auto; max-width: 700px; font-family: helvetica;">

        <div style="border: 1px solid; float: left; padding:5px 10px 10px 10px;font-family: helvetica;">
            <div style="display:inline;layout-flow:horizontal;font-family: helvetica;"><a name="caption1"></a>
<!--                <h1 style="float:left; width:93%; background: #b6dfeb none repeat scroll 0 0; padding: 4pt 9pt 4pt; font-size: 10px;font-family: helvetica;"><a name="bookmark0"></a><span class="font2" style="font-weight:bold;color:#17365D;font-family: helvetica;">Appendix 10 - RCoA logbook summary</span></h1>-->
                <h2 style="float: left; width: 100%; margin-top: 3px; text-align: center; padding: 0px;  margin-bottom: 0; ">
                    <span class="font1" style="color: #221f20; font-size: 15px;font-weight: bold;font-family: helvetica;">LOGBOOK SUMMARY</span>
                </h2>
<!--                <p style="text-align:center; margin-top: 2px; float: left; width:100%;"><span class="font0" style="color:#221F20; font-size: 13px;  text-align: center;">(This can be downloaded as a report from the RCoA electronic logbook)</span></p>-->
            </div><br clear="all"/>


            <table cellspacing="0"  border="0" style=" /**width: 800px;  **/ margin-top: -5px;">

                <tr>
                    <td style="background-color:#DCDDDF; padding: 6px;width: 138px;">
                        <p>
                            <span class="font0" style="font-weight:bold;color:#221F20; ">Summary for period:</span>
                        </p>
                    </td>
                    <td style="vertical-align:middle;background-color:#DCDDDF; width: 61px;">
                        <p><span class="font0" style="font-weight:bold;color:#221F20;">From:</span></p></td><td>
                        <p><strong><?php $date_f = explode("-",$_GET['from']); print $date_f[2].'/'.$date_f[1].'/'.$date_f[0]; ?></strong></p></td><td style="vertical-align:middle;background-color:#DCDDDF;width: 61px;">
                        <p><span class="font0" style="font-weight:bold;color:#221F20; ">To:</span></p></td><td>
                        <p><strong><?php $date_t = explode("-",$_GET['to']); print $date_t[2].'/'.$date_t[1].'/'.$date_t[0]; ?></strong></p>
                    </td>
                </tr>

            </table> 
                <p style=" margin-top: 12px;">
                <span class="font0" style="font-weight:bold;text-decoration:underline;color:#221F20;">Specialty &amp; age</span>
            </p>


				<?php 
				$sup_name_arr = array();
				foreach($variable['supervised_arr'] as $index => $data){ 
				$sup_name_arr[] = $index;
				}
				?>
            <table  cellspacing="0" cellpadding="3" border="0" style=" width: 100%;">
                <tr><td rowspan="2" style="vertical-align:middle;background-color:#DCDDDF;text-align:center;">
                        <p style="text-align:center;padding:0pt 2pt 0pt 0pt;"><span class="font0" style="font-weight:bold;color:#221F20;text-align:center;">Specialty</span></p></td><td rowspan="2" style="vertical-align:middle;background-color:#DCDDDF;">
                        <p style="padding:0pt 0pt 3pt 0pt;"><span class="font0" style="font-weight:bold;color:#221F20;text-align:center;">Total</span></p>
                        <p style="padding:3pt 0pt 0pt 0pt;"><span class="font0" style="font-weight:bold;color:#221F20;text-align:center;">cases</span></p></td><td rowspan="2" style="vertical-align:middle;background-color:#DCDDDF;">
                        <p style="text-align:center;"><span class="font0" style="font-weight:bold;color:#221F20;text-align:center;">%</span></p></td><td colspan="<?php print count($sup_name_arr); ?>" style="vertical-align:bottom;background-color:#DCDDDF;text-align:center;">
                        <p style="text-align:center;"><span class="font0" style="font-weight:bold;color:#221F20;text-align:center;">Level of Supervision</span></p></td><td colspan="5" style="vertical-align:bottom;background-color:#DCDDDF;text-align:center;">
                        <p style="text-align:center;padding:0pt 0pt 0pt 2pt;"><span class="font0" style="font-weight:bold;color:#221F20;text-align:center;">Age of patient</span></p></td></tr>
                <tr><td style="vertical-align:middle;background-color:#DCDDDF;">
				<?php foreach($sup_name_arr as $index): ?>
                        <p style="text-align:center;"><span class="font0" style="font-weight:bold;color:#221F20;text-align:center;"><?php print render($index); ?></span></p></td><td style="vertical-align:middle;background-color:#DCDDDF;">
				<?php endforeach; ?>
                        <p><span class="font0" style="font-weight:bold;color:#221F20;text-align:center;">&lt;1 yr</span></p></td><td style="vertical-align:middle;background-color:#DCDDDF;">
                        <p><span class="font0" style="font-weight:bold;color:#221F20;text-align:center;">1-5</span></p></td><td style="vertical-align:middle;background-color:#DCDDDF;">
                        <p><span class="font0" style="font-weight:bold;color:#221F20;text-align:center;">6-15</span></p></td><td style="vertical-align:middle;background-color:#DCDDDF;">
                        <p><span class="font0" style="font-weight:bold;color:#221F20;text-align:center;">16-80</span></p></td><td style="vertical-align:middle;background-color:#DCDDDF;">
                        <p style="padding:0pt 0pt 0pt 8pt;"><span class="font0" style="font-weight:bold;color:#221F20;text-align:center;">&gt;80</span></p></td></tr>
				<?php foreach($variable['report_pdf_arr'] as $spindex => $sp_data): ?>
                <tr><td style="background-color:#DCDDDF;">
                        <p style="text-align:center;"><span class="font0" style="color:#221F20;text-align:center;"><?php print $spindex; ?></span></p></td><td>
                        <p style="text-align:center;"><?php print render($sp_data['t_cases']); ?></p></td><td>
                        <p style="text-align:center;"><?php print round(render($sp_data['percent']),2); ?>%</p></td><td>

					<?php foreach($sup_name_arr as $index2): ?>
					<?php 
					$col_data = 0;
					if(isset($sp_data['l_o_s'][$index2]))$col_data = $sp_data['l_o_s'][$index2];
					?>
                        <p style="text-align:center;"><?php print render($col_data); ?></p></td><td>
					<?php endforeach; ?>

                        <p style="text-align:center;"><?php print render($sp_data['age']['_1']); ?></p></td><td>
                        <p  style="text-align:center;"><?php print render($sp_data['age']['1_5']); ?></p></td><td>
                        <p style="text-align:center;"><?php print render($sp_data['age']['6_15']); ?></p></td><td>
                        <p style="text-align:center;"><?php print render($sp_data['age']['16_80']); ?></p></td><td>
                        <p style="text-align:center;"><?php print render($sp_data['age']['80_']); ?></p></td></tr>
				<?php endforeach; ?>

                <tr><td style="background-color:#DCDDDF;">
                        <p><span class="font0" style="font-weight:bold;color:#221F20;text-align:center;">TOTALS</span></p></td><td>
                        <p style="text-align:center;"><?php print render($variable['report_pdf_arr']['total']['value']); ?></p></td><td>
                        <p style="padding:0pt 0pt 0pt 8pt;" colspan="<?php print (count($sup_name_arr)+6); ?>"></p></td></tr>
            </table>
            <p>
                <span class="font0" style="font-weight:bold;text-decoration:underline;color:#221F20;">Total number of anaesthetics given in this period</span></p>


            <table border="0" cellpadding="3" cellspacing="0" style="width:100%;">
                <tr><td  style="background-color:#DCDDDF;">
                        <p></p></td><td style="vertical-align:middle;background-color:#DCDDDF;">
                        <p style="text-align:center;padding:0pt 0pt 0pt 2pt;"><span class="font0" style="font-weight:bold;color:#221F20;">Total number of cases</span></p></td></tr>
                
				<?php foreach($variable['supervised_arr'] as $index => $data): ?>
                <tr><td style="vertical-align:bottom;background-color:#DCDDDF;">
                        <p><span class="font0" style="font-weight:bold;color:#221F20;"><?php print render($index); ?></span></p></td>
                       <td>
                        <p style="padding:0pt 0pt 0pt 39pt;"><?php print render($data); ?></p></td></tr>
				<?php endforeach; ?>
                        
            </table>
            <!--table border="0" cellpadding="3" cellspacing="0" style="width:670px; margin-top: 20px;">

                <tr><td style="width:50%; background-color:#DCDDDF;">
                        <p style="background-color:#DCDDDF;"><span class="font0" style="font-weight:bold;color:#221F20;">Number of ICU sessions</span></p></td>
                    <td style="width:50%;"></td>
                </tr>
                <tr>
                    <td style="background-color:#DCDDDF;">
                        <p><span class="font0" style="font-weight:bold;color:#221F20;">ASA Grade and level of supervision</span></p></td>
                    <td></td>
                </tr>
            </table-->


        </div>         
<!--        <pagebreak></pagebreak>-->

        <div class="break-page" style="border: 1px solid; padding:5px 10px 10px 10px;">
            <div style="display:inline;layout-flow:horizontal;">
                <p style="margin-top:0px; margin-bottom: 15px;"><span class="font0" style="font-weight:bold;color:#221F20;">ASA Grade and level of supervision</span></p>
                <table border="0" cellspacing="0" style="/** width:800px !important; **/">
                    <tr><td style="background-color:#DCDDDF;">
                            <p></p></td><td style="background-color:#DCDDDF;">

				<?php foreach($sup_name_arr as $index): ?>
                            <p style="padding:0pt 0pt 0pt 9pt;"><span class="font0" style="font-weight:bold;color:#221F20;"><?php print render($index); ?></span></p></td><td style="background-color:#DCDDDF;">
				<?php endforeach; ?>

                            <p style="text-align:center;"><span class="font0" style="font-weight:bold;color:#221F20;">Totals</span></p></td></tr>
                    
                    
				<?php foreach($variable['sp_asa_arr'] as $index => $data): ?>
                    <tr><td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="font-weight:bold;color:#221F20;"><?php print render($index); ?></span></p></td><td>

					<?php foreach($sup_name_arr as $index): ?>
					<?php 
					$col_data = 0;
					if(isset($data[$index]))$col_data = $data[$index];
					?>
                            <p style="padding:0pt 0pt 0pt 9pt;"><?php print render($col_data); ?></p></td><td>
					<?php endforeach; ?>

                            <p style="padding:0pt 0pt 0pt 19pt;"><?php print render($data['total']); ?></p></td></tr>
				<?php endforeach; ?>                            
                            
                </table>
                <p><span class="font0" style="font-weight:bold;color:#221F20;">Age Group and level of supervision</span></p>
                <table border="0" cellspacing="0" style="">   
                    <tr><td style="background-color:#DCDDDF;">
                            <p></p></td><td style="background-color:#DCDDDF;">

				<?php foreach($sup_name_arr as $index): ?>
                            <p style="padding:0pt 0pt 0pt 9pt;"><span class="font0" style="font-weight:bold;color:#221F20;"><?php print render($index); ?></span></p></td><td style="background-color:#DCDDDF;">
				<?php endforeach; ?>
                            <p style="padding:0pt 0pt 0pt 9pt;"><span class="font0" style="font-weight:bold;color:#221F20;">Nill</span></p></td><td style="background-color:#DCDDDF;">

                            <p style="text-align:center;"><span class="font0" style="font-weight:bold;color:#221F20;">TOTALS</span></p></td></tr>
                    <tr><td style="vertical-align:bottom;background-color:#DCDDDF;">
                            <p><span class="font0" style="font-weight:bold;color:#221F20;">&lt;1 year</span></p></td><td>

					<?php foreach($sup_name_arr as $index): ?>
					<?php 
					$col_data = 0;
					if(isset($variable['sp_age_arr']['_1'][$index]))$col_data = $variable['sp_age_arr']['_1'][$index];
					?>
                            <p style="padding:0pt 0pt 0pt 9pt;"><?php print render($col_data); ?></p></td><td>
					<?php endforeach; 
					$total = 0;
					if(isset($variable['sp_age_arr']['_1']['total']))$total = $variable['sp_age_arr']['_1']['total'];
					?>
					<?php 
					$nill_data = 0;
					if(isset($variable['sp_age_arr']['_1']['']))$nill_data = $variable['sp_age_arr']['_1'][''];
					?>
                            <p style="padding:0pt 0pt 0pt 9pt;"><?php print render($nill_data); ?></p></td><td>

                            <p style="padding:0pt 0pt 0pt 19pt;"><?php print render($total); ?></p></td></tr>
                    <tr><td style="vertical-align:bottom;background-color:#DCDDDF;">
                            <p><span class="font0" style="font-weight:bold;color:#221F20;">1-5 years</span></p></td><td>
					<?php foreach($sup_name_arr as $index): ?>
					<?php 
					$col_data = 0;
					if(isset($variable['sp_age_arr']['1_5'][$index]))$col_data = $variable['sp_age_arr']['1_5'][$index];
					?>
                            <p style="padding:0pt 0pt 0pt 9pt;"><?php print render($col_data); ?></p></td><td>
					<?php endforeach; 
					$total = 0;
					if(isset($variable['sp_age_arr']['1_5']['total']))$total = $variable['sp_age_arr']['1_5']['total'];
					?>
					<?php 
					$nill_data = 0;
					if(isset($variable['sp_age_arr']['1_5']['']))$nill_data = $variable['sp_age_arr']['1_5'][''];
					?>
                            <p style="padding:0pt 0pt 0pt 9pt;"><?php print render($nill_data); ?></p></td><td>

                            <p style="padding:0pt 0pt 0pt 19pt;"><?php print render($total); ?></p></td></tr>
                    <tr><td style="vertical-align:bottom;background-color:#DCDDDF;">
                            <p><span class="font0" style="font-weight:bold;color:#221F20;">6-15 years</span></p></td><td>
					<?php foreach($sup_name_arr as $index): ?>
					<?php 
					$col_data = 0;
					if(isset($variable['sp_age_arr']['6_15'][$index]))$col_data = $variable['sp_age_arr']['6_15'][$index];
					?>
                            <p style="padding:0pt 0pt 0pt 9pt;"><?php print render($col_data); ?></p></td><td>
					<?php endforeach; 
					$total = 0;
					if(isset($variable['sp_age_arr']['6_15']['total']))$total = $variable['sp_age_arr']['6_15']['total'];
					?>
					<?php 
					$nill_data = 0;
					if(isset($variable['sp_age_arr']['6_15']['']))$nill_data = $variable['sp_age_arr']['6_15'][''];
					?>
                            <p style="padding:0pt 0pt 0pt 9pt;"><?php print render($nill_data); ?></p></td><td>
					

                            <p style="padding:0pt 0pt 0pt 19pt;"><?php print render($total); ?></p></td></tr>
                    <tr><td style="vertical-align:bottom;background-color:#DCDDDF;">
                            <p><span class="font0" style="font-weight:bold;color:#221F20;">16-80 years</span></p></td><td>
					<?php foreach($sup_name_arr as $index): ?>
					<?php 
					$col_data = 0;
					if(isset($variable['sp_age_arr']['16_80'][$index]))$col_data = $variable['sp_age_arr']['16_80'][$index];
					?>
                            <p style="padding:0pt 0pt 0pt 9pt;"><?php print render($col_data); ?></p></td><td>
					<?php endforeach; 
					$total = 0;
					if(isset($variable['sp_age_arr']['16_80']['total']))$total = $variable['sp_age_arr']['16_80']['total'];
					?>
					<?php 
					$nill_data = 0;
					if(isset($variable['sp_age_arr']['16_80']['']))$nill_data = $variable['sp_age_arr']['16_80'][''];
					?>
                            <p style="padding:0pt 0pt 0pt 9pt;"><?php print render($nill_data); ?></p></td><td>

                            <p style="padding:0pt 0pt 0pt 19pt;"><?php print render($total); ?></p></td></tr>
                    <tr><td style="vertical-align:bottom;background-color:#DCDDDF;">
                            <p><span class="font0" style="font-weight:bold;color:#221F20;">&gt;80 years</span></p></td><td>
					<?php foreach($sup_name_arr as $index): ?>
					<?php 
					$col_data = 0;
					if(isset($variable['sp_age_arr']['80_'][$index]))$col_data = $variable['sp_age_arr']['80_'][$index];
					?>
                            <p style="padding:0pt 0pt 0pt 9pt;"><?php print render($col_data); ?></p></td><td>
					<?php endforeach; 
					$total = 0;
					if(isset($variable['sp_age_arr']['80_']['total']))$total = $variable['sp_age_arr']['80_']['total'];
					?>
					<?php 
					$nill_data = 0;
					if(isset($variable['sp_age_arr']['80_']['']))$nill_data = $variable['sp_age_arr']['80_'][''];
					?>
                            <p style="padding:0pt 0pt 0pt 9pt;"><?php print render($nill_data); ?></p></td><td>

                            <p style="padding:0pt 0pt 0pt 19pt;"><?php print render($total); ?></p></td></tr>
                </table>
                <p><span class="font0" style="font-weight:bold;color:#221F20;">Time of day and level of supervision</span></p>
                <table border="0" cellspacing="0" style="">
                    <tr><td style="background-color:#DCDDDF;">
                            <p></p></td><td style="background-color:#DCDDDF;">
				<?php foreach($sup_name_arr as $index): ?>
                            <p style="padding:0pt 0pt 0pt 9pt;"><span class="font0" style="font-weight:bold;color:#221F20;"><?php print render($index); ?></span></p></td><td style="background-color:#DCDDDF;">
				<?php endforeach; ?>
                            <p style="text-align:center;"><span class="font0" style="font-weight:bold;color:#221F20;">TOTALS</span></p></td></tr>
                    <tr><td style="vertical-align:middle;background-color:#DCDDDF;">
                            <p><span class="font0" style="font-weight:bold;color:#221F20;">08.00 - 18.00</span></p></td><td>
							<?php foreach($sup_name_arr as $index): ?>
							<?php 
							$col_data = 0;
							if(isset($variable['sp_time_arr']['8_18'][$index]))$col_data = $variable['sp_time_arr']['8_18'][$index];
							?>
									<p style="padding:0pt 0pt 0pt 9pt;"><?php print render($col_data); ?></p></td><td>
							<?php endforeach; 
							$total = 0;
							if(isset($variable['sp_time_arr']['8_18']['total']))$total = $variable['sp_time_arr']['8_18']['total'];
							?>
									<p style="padding:0pt 0pt 0pt 19pt;"><?php print render($total); ?></p></td></tr>
                    <tr><td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="font-weight:bold;color:#221F20;">18.00 - 24.00</span></p></td><td>
							<?php foreach($sup_name_arr as $index): ?>
							<?php 
							$col_data = 0;
							if(isset($variable['sp_time_arr']['18_24'][$index]))$col_data = $variable['sp_time_arr']['18_24'][$index];
							?>
									<p style="padding:0pt 0pt 0pt 9pt;"><?php print render($col_data); ?></p></td><td>
							<?php endforeach; 
							$total = 0;
							if(isset($variable['sp_time_arr']['18_24']['total']))$total = $variable['sp_time_arr']['18_24']['total'];
							?>
									<p style="padding:0pt 0pt 0pt 19pt;"><?php print render($total); ?></p></td></tr>
                    <tr><td style="vertical-align:middle;background-color:#DCDDDF;">
                            <p><span class="font0" style="font-weight:bold;color:#221F20;">00.00 - 08.00</span></p></td><td>
							<?php foreach($sup_name_arr as $index): ?>
							<?php 
							$col_data = 0;
							if(isset($variable['sp_time_arr']['0_8'][$index]))$col_data = $variable['sp_time_arr']['0_8'][$index];
							?>
									<p style="padding:0pt 0pt 0pt 9pt;"><?php print render($col_data); ?></p></td><td>
							<?php endforeach; 
							$total = 0;
							if(isset($variable['sp_time_arr']['0_8']['total']))$total = $variable['sp_time_arr']['0_8']['total'];
							?>
									<p style="padding:0pt 0pt 0pt 19pt;"><?php print render($total); ?></p></td></tr>
                </table>

                <p style="margin-top:10px; margin-bottom:0px;"><span class="font0" style="font-weight:bold;color:#221F20; border-bottom: 1px solid;">Priority and level of supervision</span></p>
            </div><br clear="all"/><div style="display:inline;layout-flow:horizontal;">
                <table cellspacing="0" style="">
                    <tr><td style="background-color:#DCDDDF;">
                            <p></p></td><td style="background-color:#DCDDDF;">
				<?php foreach($sup_name_arr as $index): ?>
                            <p style="padding:0pt 0pt 0pt 9pt;"><span class="font0" style="font-weight:bold;color:#221F20;"><?php print render($index); ?></span></p></td><td style="background-color:#DCDDDF;">
				<?php endforeach; ?>
                            <p style="text-align:center;"><span class="font0" style="font-weight:bold;color:#221F20;">TOTALS</span></p></td></tr>
                    <tr><td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="font-weight:bold;color:#221F20;">Routine</span></p></td><td>
							<?php foreach($sup_name_arr as $index): ?>
							<?php 
							$col_data = 0;
							if(isset($variable['sp_priority_arr']['Routine'][$index]))$col_data = $variable['sp_priority_arr']['Routine'][$index];
							?>
									<p style="padding:0pt 0pt 0pt 9pt;"><?php print render($col_data); ?></p></td><td>
							<?php endforeach; 
							$total = 0;
							if(isset($variable['sp_priority_arr']['Routine']['total']))$total = $variable['sp_priority_arr']['Routine']['total'];
							?>
									<p style="padding:0pt 0pt 0pt 19pt;"><?php print render($total); ?></p></td></tr>
                    <tr><td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="font-weight:bold;color:#221F20;">Day case</span></p></td><td>
							<?php foreach($sup_name_arr as $index): ?>
							<?php 
							$col_data = 0;
							if(isset($variable['sp_priority_arr']['Day Case'][$index]))$col_data = $variable['sp_priority_arr']['Day Case'][$index];
							?>
									<p style="padding:0pt 0pt 0pt 9pt;"><?php print render($col_data); ?></p></td><td>
							<?php endforeach; 
							$total = 0;
							if(isset($variable['sp_priority_arr']['Day Case']['total']))$total = $variable['sp_priority_arr']['Day Case']['total'];
							?>
									<p style="padding:0pt 0pt 0pt 19pt;"><?php print render($total); ?></p></td></tr>
                    <tr><td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="font-weight:bold;color:#221F20;">Urgent</span></p></td><td>
							<?php foreach($sup_name_arr as $index): ?>
							<?php 
							$col_data = 0;
							if(isset($variable['sp_priority_arr']['Urgent'][$index]))$col_data = $variable['sp_priority_arr']['Urgent'][$index];
							?>
									<p style="padding:0pt 0pt 0pt 9pt;"><?php print render($col_data); ?></p></td><td>
							<?php endforeach; 
							$total = 0;
							if(isset($variable['sp_priority_arr']['Urgent']['total']))$total = $variable['sp_priority_arr']['Urgent']['total'];
							?>
									<p style="padding:0pt 0pt 0pt 19pt;"><?php print render($total); ?></p></td></tr>
                    <tr><td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="font-weight:bold;color:#221F20;">Emergency</span></p></td><td>
							<?php foreach($sup_name_arr as $index): ?>
							<?php 
							$col_data = 0;
							if(isset($variable['sp_priority_arr']['Emergency'][$index]))$col_data = $variable['sp_priority_arr']['Emergency'][$index];
							?>
									<p style="padding:0pt 0pt 0pt 9pt;"><?php print render($col_data); ?></p></td><td>
							<?php endforeach; 
							$total = 0;
							if(isset($variable['sp_priority_arr']['Emergency']['total']))$total = $variable['sp_priority_arr']['Emergency']['total'];
							?>
									<p style="padding:0pt 0pt 0pt 19pt;"><?php print render($total); ?></p></td></tr>
                </table>
                <!--p style="margin-top:15px;">
                    <span class="font0" style="font-weight:bold;text-decoration:underline;color:#221F20;">
                       Teaching experience <br /></span>
                </p-->
            </div>
            <div style="display:inline;layout-flow:horizontal;">
                <!--table cellspacing="0" style="width:680px;">
                    <tr><td style="background-color:#DCDDDF;">
                            <p></p></td><td style="vertical-align:middle;background-color:#DCDDDF;">
                            <p style="text-align:center;"><span class="font0" style="font-weight:bold;color:#221F20;">Non-medical</span></p></td><td style="vertical-align:middle;background-color:#DCDDDF;">
                            <p style="padding:0pt 0pt 0pt 9pt;"><span class="font0" style="font-weight:bold;color:#221F20;">Medical Student</span></p></td><td style="vertical-align:bottom;background-color:#DCDDDF;">
                            <p style="text-align:justify;padding:0pt 11pt 0pt 11pt;"><span class="font0" style="font-weight:bold;color:#221F20;">Junior trainees (ST years 1 &amp; 2)</span></p></td><td style="vertical-align:bottom;background-color:#DCDDDF;">
                            <p style="text-align:justify;padding:0pt 10pt 0pt 10pt;"><span class="font0" style="font-weight:bold;color:#221F20;">Senior trainees (ST years 3 to 7)</span></p></td></tr>
                    <tr><td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="font-weight:bold;color:#221F20;">No of cases</span></p></td><td>
                            <p style="padding:0pt 0pt 0pt 12pt;"></p></td><td>
                            <p style="padding:0pt 0pt 0pt 9pt;"></p></td><td>
                            <p style="padding:0pt 0pt 0pt 11pt;"></p></td><td>
                            <p style="padding:0pt 0pt 0pt 10pt;"></p></td></tr>
                </table--></div><div style="display:inline;layout-flow:horizontal;">
                <p style="margin-top:15px;">
                    <span   style="border-bottom: 1px solid ;">
                        <span class="font0" style="color:#221F20  solid; font-weight:bold;">
                            Working pattern (based on anaesthetic </span>
                        <span class="font0" style="font-weight:bold;font-style:italic;color:#221F20;">
                            start
                        </span>
                        <span class="font0" style=" font-weight:bold; color:#221F20;"> time)
                        </span>
                    </span>  
                </p>

                <table border="0" cellspacing="0" style="">
                    <tr><td style="background-color:#DCDDDF;">
                            <p></p></td>
                        <td colspan="3" style="background-color:#DCDDDF;">
                            <p style="text-align:center;"><span class="font0" style="font-weight:bold;color:#221F20;">Weekday</span></p></td>
                        <td style="border:0 !important;"> <p></p></td>
                        <td colspan="3" style="background-color:#DCDDDF;">
                            <p style="text-align:center;padding:0pt 0pt 0pt 1pt;"><span class="font0" style="font-weight:bold;color:#221F20;">Weekend</span></p>
                        </td>
                    </tr>
                    <tr><td colspan="1" style="background-color:#DCDDDF; border: 0px !improtant;">
                            <p></p></td>
                        <td style="background-color:#DCDDDF;">
                            <p style="text-align:center;"><span class="font0" style="font-weight:bold;color:#221F20;">Day</span></p></td><td style="background-color:#DCDDDF;">
                            <p style="text-align:center;padding:0pt 1pt 0pt 0pt;"><span class="font0" style="font-weight:bold;color:#221F20;">Evening</span></p></td><td style="background-color:#DCDDDF;">
                            <p style="text-align:center;"><span class="font0" style="font-weight:bold;color:#221F20;">Night</span></p></td><td>
                            <p></p></td><td style="background-color:#DCDDDF;">
                            <p style="text-align:center;"><span class="font0" style="font-weight:bold;color:#221F20;">Day</span></p></td><td style="background-color:#DCDDDF;">
                            <p style="text-align:center;"><span class="font0" style="font-weight:bold;color:#221F20;">Evening</span></p></td><td style="background-color:#DCDDDF;">
                            <p style="text-align:center;"><span class="font0" style="font-weight:bold;color:#221F20;">Night</span></p></td></tr>
                    <tr><td style="vertical-align:middle;background-color:#DCDDDF;">
                            <p><span class="font0" style="font-weight:bold;font-style:italic;color:#221F20;">No of cases</span></p></td><td>
                            <p style="padding:0pt 0pt 0pt 17pt;"><?php print render($variable['case_pattern_arr']['Weekday']['Day']); ?></p></td><td>
                            <p style="padding:0pt 0pt 0pt 11pt;"><?php print render($variable['case_pattern_arr']['Weekday']['Evening']); ?></p></td><td>
                            <p style="padding:0pt 0pt 0pt 15pt;"><?php print render($variable['case_pattern_arr']['Weekday']['Night']); ?></p></td><td>
                            <p></p></td><td>
                            <p style="padding:0pt 0pt 0pt 16pt;"><?php print render($variable['case_pattern_arr']['Weekend']['Day']); ?></p></td><td>
                            <p style="padding:0pt 0pt 0pt 10pt;"><?php print render($variable['case_pattern_arr']['Weekend']['Evening']); ?></p></td><td>
                            <p style="padding:0pt 0pt 0pt 14pt;"><?php print render($variable['case_pattern_arr']['Weekend']['Night']); ?></p></td>
                    </tr>
                </table>
                <p style="text-algin:center;"><span class="font0" style="color:#221F20; text-align: center; padding-top:40px;"><br />   <br />  <br /> <br />   <br />  <br /> </span></p>
            </div>

        </div>

<!--        <pagebreak></pagebreak>-->
        <!-- end of second page -->
        <div class="break-page" style="border: 1px solid; padding:10px; margin-top:20px;">  
           <div style="display:inline;layout-flow:horizontal;">
            </div><div style="  display:inline;layout-flow:horizontal;">
                <p style="margin-top:10px;"><span class="font0" style="font-weight:bold;color:#221F20;">Modes of anaesthesia</span></p>
                <table border="" cellspacing="0" style="">

                    <tr><td style="background-color:#DCDDDF;">
                            <p style="text-align:center;">
                                <span class="font0" style="font-weight:bold;font-style:italic;color:#221F20;">
                                    Description
                                </span>
                            </p>
                        </td>
                        <td style="background-color:#DCDDDF;" colspan="5">
                            <p style="text-align:center;padding:0pt 4pt 0pt 0pt;">
                                <span class="font0" style="font-weight:bold;color:#221F20;">Number of cases</span>
                            </p>
                        </td>
                    </tr>
                    <!--tr>
                        <td colspan="6" style="vertical-align:bottom;background-color:#DCDDDF;">
                            <p>
                                <span class="font0" style="font-weight:bold;font-style:italic;color:#221F20;">
                                    Primary mode</span>
                            </p>
                        </td>
                    </tr-->
                    
				<?php foreach($variable['case_anaesthesia_arr'] as $index => $data): ?>
					<?php if($index!="total"): ?>
                    <tr><td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;"><?php print render($index); ?></span></p></td>
                        <td colspan="5">
                            <p><?php print render($data); ?></p>
                        </td>
                    </tr>
					<?php endif; ?>
				<?php endforeach; ?>
                    <tr><td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;"><strong>Total</strong></span></p></td>
                        <td colspan="5">
                            <p><strong><?php print render($variable['case_anaesthesia_arr']['total']); ?></strong></p>
                        </td>
                    </tr>
                    
                </table>  
                <!--p><span class="font0" style="font-weight:bold;color:#221F20;">Modes of anaesthesia (continued)</span></p>

                <table border="0" cellspacing="0" style="width:680px;"> 
                    <tr>
                        <td colspan="8" style="background-color:#DCDDDF;">
                            <p><span class="font0" style="font-weight:bold;font-style:italic;color:#221F20;">Secondary/Regional techniques</span></p></td>

                    </tr>
                    <tr>
                        <td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;">Spinal</span></p>
                        </td>
                        <td colspan="7">
                            <p></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;">Epidural (including CSE)</span></p>
                        </td>
                        <td colspan="7">
                            <p></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;">Brachial plexus</span></p>
                        </td>
                        <td colspan="7">
                            <p></p></td>
                    </tr>
                    <tr>
                        <td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;">Sciatic</span></p>
                        </td>
                        <td colspan="7">
                            <p></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;">Femoral</span></p>
                        </td>
                        <td colspan="7">
                            <p></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;">VRA</span></p>
                        </td>
                        <td colspan="7">
                            <p></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;">Minor nerve blocks</span></p>
                        </td>
                        <td colspan="7">
                            <p></p></td>
                    </tr>
                    <tr>
                        <td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;">Cervical plexus</span></p>
                        </td>
                        <td colspan="7">
                            <p></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;">Peripheral</span></p>
                        </td>
                        <td colspan="7">
                            <p></p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="8" style="background-color:#DCDDDF;">
                            <p><span class="font0" style="font-weight:bold;color:#221F20;">Additional procedures</span></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;">RSI</span></p>
                        </td>
                        <td colspan="7">
                            <p></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;">TIVA</span></p>
                        </td>
                        <td colspan="7">
                            <p></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;">PA catheter</span></p>
                        </td>
                        <td colspan="7">
                            <p></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;">CVP line</span></p>
                        </td>
                        <td colspan="7">
                            <p></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;">Arterial line</span></p>
                        </td>
                        <td colspan="7">
                            <p></p></td>
                    </tr>
                    <tr>
                        <td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;">Fibreoptic intubation</span></p>
                        </td>
                        <td colspan="7">
                            <p></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;">Percutaneous tracheostomy</span></p>
                        </td>
                        <td colspan="7">
                            <p></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;">Double lumen tube</span></p>
                        </td>
                        <td colspan="7">
                            <p></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;">Chest drain</span></p>
                        </td>
                        <td colspan="7">
                            <p></p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#DCDDDF;">
                            <p><span class="font0" style="color:#221F20;">
                                    <br />Other (specify):<br /><br /></span></p>
                        </td>
                        <td colspan="7">
                            <p></p>
                        </td>
                    </tr>
                </table-->
            <!--p style="text-align:center;padding:0pt 3pt 0pt 0pt;">
                                <span class="font0" style="color:#221F20;"><br /><br /><br /><br /></span>
                            </p-->
            </div>
        </div>  
</div>           
