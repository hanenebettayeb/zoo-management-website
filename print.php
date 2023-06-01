<?php 
  require ("fpdf.php");
  require "connection.php"; 

  //customer and invoice details
 //okedtickets Details From Database
  $sql="select * from bookedticketstabel s where id='{$_GET["id"]}' ";
  $res=$con->query($sql);
  if($res->num_rows>0){
	  $row=$res->fetch_assoc();
	  
	//  $obj=new IndianCurrency($row["GRAND_TOTAL"]);
     $info=[
         
        
          
        
              
		"BookedFor"=>$row["BookedFor"],
		"childTickets"=>$row ["childTickets"],
		"RegularTickets"=>$row["RegularTickets"],
		"VisitDate"=>$row["VisitDate"],
		"totalprice"=>$row["totalprice"],
     ];
  }
 
  class PDF extends FPDF
  {
    function Header(){
      
      //Display Company Info
      $this->SetFont('Arial','B',14);
      $this->Cell(50,10,"Bamboo Zoo",0,1);
      $this->SetFont('Arial','',14);
      $this->Cell(50,7,"Algeria",0,1);
      $this->Cell(50,7,"Annaba",0,1);
    
      
      
      //Display Horizontal line
      $this->Line(0,48,210,48);
    }
    
    function body($info){
      
      //Billing Details
      $this->SetY(55);
      $this->SetX(10);
      //$this->SetFont('Arial','B',12);
      //$this->Cell(50,10,"Booked For To: ",0,1);
      $this->SetFont('Arial','',12);
      $this->Cell(40,9,"childTickets",0,"C");

      $this->Cell(50,7,$info["childTickets"],0,1);
      $this->Cell(40,9,"RegularTickets",0,"C");

      $this->Cell(50,7,$info["RegularTickets"],0,1);
      $this->Cell(40,9,"totalprice",0,"C");

      $this->Cell(50,7,$info["totalprice"],0,1);
      
      
      //Display Invoice date
      $this->SetY(55);
      $this->SetX(-50);
 $this->Cell(40,9,"VisitDate",0,"C");
      $this->Cell(50,9,$info["VisitDate"],0,1);
       //Display Invoice no
       $this->SetY(55);
       $this->SetX(-120);
       $this->Cell(40,9,"BookedFor",0,"C");
       $this->Cell(50,9,$info["BookedFor"],0,1);
      
     
      
   
      
    }
    function Footer(){
      
      //set footer position
   //   $this->SetY(-50);
   //   $this->SetFont('Arial','B',12);
   //   $this->Cell(0,10,"for ABC COMPUTERS",0,1,"R");
    //  $this->Ln(15);
     // $this->SetFont('Arial','',12);
    //  $this->Cell(0,10,"Authorized Signature",0,1,"R");
     // $this->SetFont('Arial','',10);
      
      //Display Footer Text
     // $this->Cell(0,10,"This is a computer generated invoice",0,1,"C");
      
    }
}








  //Create A4 Page with Portrait 
  $pdf=new PDF("P","mm","A4");
  $pdf->AddPage();
  $pdf->body($info);
  $pdf->Output();
?>