<?php
if (isset($_POST['submit'])) {
      $nama = $_POST['nama'];
      $mailFrom = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];


      $mailTo = "cahyawbwa@gmail.com";
      $header = "From: " . $mailFrom;
      $txt = "You have received an email from " . $nama . ".\n\n" . $message;

      mail($mailTo, $subject, $txt, $headers);
      header("Location: index.html?mailsend");
      //       header("location:https://api.whatsapp.com/send?phone=6282235838125&text=Halo%0ASaya Ingin Bekerja Sama");
      // } else {
      //       echo "
      //       <script>
      //       window.location=history.go(-1);
      //       </script>


      // ";
}
// $name = $_REQUEST['nama'];
// $email =$_REQUEST['email'];
// $subject =$_REQUEST['subject'];
// $nowa =$_REQUEST['noWa'];

// //check input fields
// if (empty($name) || empty ($email) || empty($subject) || empty($nowa))
// {
//         echo "Please fill all the fields";
// }
// else
// {
//       mail("cahyawbwa@gmail.com", "Scyla Message", $nowa, "From :$name < $email < $subject>");
//       echo "<script type='text/javascript'>alert('your message sent succesfully');
//       window.history.log(-1);
//       </script>;

// }
