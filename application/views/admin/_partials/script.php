    <!--   Core JS Files   -->
  <script src="<?php echo base_url('assets/js/core/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/core/popper.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/core/bootstrap-material-design.min.js') ?>"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="<?php echo base_url('assets/js/plugins/perfect-scrollbar.jquery.min.js') ?>"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="<?php echo base_url('assets/js/plugins/chartist.min.js') ?>"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url('assets/js/plugins/bootstrap-notify.js') ?>"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url('assets/js/material-dashboard.js?v=2.1.0') ?>"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url('assets/demo/demo.js') ?>"></script>
  <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
  </script>
  
  <!-- The core Firebase JS SDK is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-app.js"></script>

  <!-- TODO: Add SDKs for Firebase products that you want to use
      https://firebase.google.com/docs/web/setup#available-libraries -->
  <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-analytics.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.7.0/firebase-database.js"></script>
  <script>
  $(document).ready(function () {
    
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    var firebaseConfig = {
    apiKey: "AIzaSyCm6w1I1KOROShQuk3tAnJD0vcir2Au0so",
    authDomain: "kebuninovasi-81f03.firebaseapp.com",
    databaseURL: "https://kebuninovasi-81f03-default-rtdb.firebaseio.com",
    projectId: "kebuninovasi-81f03",
    storageBucket: "kebuninovasi-81f03.appspot.com",
    messagingSenderId: "623156342232",
    appId: "1:623156342232:web:aedbe84d4044a14f8116ad",
    measurementId: "G-1JJQ3H3GMY"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
  
  var suhu;
  var kelembaban;
  var pH;

  firebase.database().ref('Suhu').on('value', snapshot => document.getElementById("suhu").innerHTML = snapshot.val() + "°C");
  firebase.database().ref('Kelembaban').on('value', snapshot => document.getElementById("kelembaban").innerHTML = snapshot.val() + "%");
  firebase.database().ref('pH').on('value', snapshot => document.getElementById("pH").innerHTML = snapshot.val());

  // firebase.database().ref('DHT11/Suhu').on('value',
  //   function (
  //     snapshot) {
  //     snapshot.forEach(function  (childSnapshot) {
  //       var childKey = childSnapshot.key;
  //       firebase.database().ref('DHT11/Suhu/'+ childKey).on('value',
  //       snapshot => suhu = snapshot.val());
  //       // console.log(suhu);
  //       // document.getElementById("suhu").innerHTML = suhu;
  //     });
  //   });
  //   firebase.database().ref('DHT11/Moisture/Kelembaban').on('value',
  //   function (
  //     snapshot) {
  //     snapshot.forEach(function  (childSnapshot) {
  //       var childKey = childSnapshot.key;
  //       firebase.database().ref('DHT11/Moisture/Kelembaban/'+ childKey).on('value',
  //       snapshot => kelembaban = snapshot.val());
  //       // console.log(kelembaban);
  //       // document.getElementById("kelembaban").innerHTML = kelembaban;
  //     });
  //   });
  //   firebase.database().ref('DHT11/Moisture/Kelembaban').on('value',
  //   function (
  //     snapshot) {
  //     snapshot.forEach(function  (childSnapshot) {
  //       var childKey = childSnapshot.key;
  //       firebase.database().ref('DHT11/Moisture/Kelembaban/'+ childKey).on('value',
  //       snapshot => kelembaban = snapshot.val());
  //       // console.log(kelembaban);
  //       // document.getElementById("kelembaban").innerHTML = kelembaban;
  //     });
  //   });
  });
</script>