<?php
require_once('tcpdf/tcpdf.php');

// Create new PDF document
$pdf = new TCPDF();

// Set document information
$pdf->SetCreator('Your App Name');
$pdf->SetAuthor('Author Name');
$pdf->SetTitle('Title of the Book');



// Your book content (replace this with your actual content)
$content = '

<style>
.cover {
    background-image: url("car3.jpg");
     background-size: cover; width: 100%; height: 100vh;
}
</style>


<div class="cover"  >
                     <h1>Front Cover</h1>
                    </div>';
            
                    $pdf->AddPage();
                    $pdf->writeHTMLCell(0, 0, '', '', $content, 0, 1, 0, true, '', true);
                   
                    for ($i = 1; $i <= 3; $i++) { 
                        $content1= '<div class="page">
                            <h2>Page '.$i.'</h2>
                            <p>Your content here...</p>
                        </div>';
                         
                        $pdf->AddPage();
                        $pdf->writeHTMLCell(0, 0, '', '', $content1, 0, 1, 0, true, '', true); 
                           
                    }
                   
                
                    $content3 .= '<!-- Back cover -->
                                    <div class="cover">
                                        <h1>Back Cover</h1>
                                    </div>';
                $pdf->AddPage();
                $pdf->writeHTMLCell(0, 0, '', '', $content3, 0, 1, 0, true, '', true);  
                
               
// Add content to the page
// $pdf->writeHTML($content, true, false, true, false, '');





// Output PDF as a file
$pdf->Output('your_book.pdf', 'D');


?>
