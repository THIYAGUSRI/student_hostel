<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: 'Raleway', Arial, sans-serif;
  background-color: #f4f4f4;
  color: #333;
}

.topnav {
  overflow: hidden;
  background: linear-gradient(90deg, #4A90E2, #32CD32);
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  font-size: 18px;
  border-radius: 8px;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
  transition: background-color 0.3s, color 0.3s;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.c {
  width: 100%;
  height: 600px;
  overflow: hidden;
  position: relative;
  margin-bottom: 20px;
}

.c input {
  display: none;
}

.ci {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: inherit;
  transition: transform 0.6s ease-out, opacity 0.6s ease-out;
}

.ci img {
  width: 100%;
  height: 600px;
  object-fit: cover;
  user-select: none;
}

label {
  position: absolute;
  bottom: 20px;
  width: 14px;
  height: 14px;
  margin: 0 8px;
  background: hsla(0, 0%, 90%, 0.7);
  border-radius: 50%;
  cursor: pointer;
  transition: transform 0.3s, background 0.3s;
}

label:hover {
  transform: scale(1.2);
}

@keyframes slide {
  0% { opacity: 0; transform: translateX(-100%); }
  10% { opacity: 1; transform: translateX(0); }
  25% { opacity: 1; }
  33% { opacity: 0; transform: translateX(100%); }
  100% { opacity: 0; transform: translateX(100%); }
}

.ci:nth-child(3n+1) {
  animation: slide 8s linear infinite;
}

.ci:nth-child(3n+2) {
  animation: slide 8s linear infinite 2.67s;
}

.ci:nth-child(3n+3) {
  animation: slide 8s linear infinite 5.33s;
}

.content {
  width: 100%;
  background-color: #fff;
  padding: 30px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  line-height: 1.6;
  box-sizing: border-box;
}

h2 {
  color: #4A90E2;
  text-align: center;
  margin-bottom: 20px;
  background: linear-gradient(to right, #4A90E2, #32CD32);
  padding: 15px;
  border-radius: 8px;
  color: #fff;
}

h3 {
  color: #2980b9;
  margin-top: 30px;
  border-bottom: 2px solid #3498db;
  padding-bottom: 10px;
}

h4 {
  color: #27ae60;
  margin-bottom: 10px;
}

ul {
  list-style-type: none;
  padding-left: 0;
}

ul li {
  background: url('https://image.shutterstock.com/image-vector/checkmark-icon-symbol-tick-260nw-1699372953.jpg') no-repeat left center;
  background-size: 20px;
  padding-left: 30px;
  margin-bottom: 10px;
  transition: all 0.3s ease-in-out;
  border-radius: 5px;
}

ul li:hover {
  background-color: #e9f5ff;
  padding-left: 26px;
}

@media screen and (max-width: 768px) {
  .c {
    height: 400px;
  }

  .ci img {
    height: 400px;
  }

  .content {
    padding: 20px;
  }

  h2 {
    font-size: 1.8rem;
  }

  h3 {
    font-size: 1.4rem;
  }
}
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="student.php">User Login</a>
  <a href="admin_hostel/admin.php">Admin login</a>
  <a href="newuser.php">New User</a>
  <a href="admin_hostel/security.php">Security</a>
</div>

<div class="c">
  <div class="ci">
    <img src="clg.jpeg" alt="First slide">
  </div>

  <div class="ci">
    <img src="R.jpeg" alt="Second slide">
  </div>

  <div class="ci">
    <img src="Re.jpeg" alt="Third slide">
  </div>

  <div class="ci">
    <img src="Reg.jpeg" alt="Fourth slide">
  </div>
</div>

<div class="content">
  <h2>MCET - Realization of a Grand Dream</h2>
  <p style="color: #34495e; font-size: 16px;">
    <strong>Dr. Mahalingam College of Engineering and Technology (MCET)</strong> is a self-financing educational institution situated in Pollachi, Coimbatore District. MCET is the vision of Arutchelvar Dr. N. Mahalingam, whose determination and dynamism made possible the realization of this institution of excellence. MCET was established in 1998 to commemorate the 75th birthday of this great visionary Arutchelvar Dr. N. Mahalingam.
  </p>

  <h3>Unique Facilities in the Campus</h3>
  <ul>
    <li>1800+ computers</li>
    <li>Single mode fiber optic cable connecting all 1800+ computers</li>
    <li>200 Mbps internet connectivity</li>
    <li>Computerized Library Functioning all 365 days</li>
    <li>Modernized Boys & Girls Hostel with Internet Facilities</li>
    <li>Multipurpose Indoor Sports Auditorium with 4000 seating capacity</li>
    <li>World class Internet Data Center</li>
    <li>Various clubs: Rotaract, Consumer, ECO, Renewable Energy, Fine Arts, Tamil Mandram, etc.</li>
    <li>Video Conferencing facilities</li>
    <li>Tele education facilities through Edusat</li>
    <li>Yoga & Meditation Hall</li>
    <li>Language Learning Centre</li>
    <li>Driving School</li>
  </ul>

  <h3>MoUs with International Universities</h3>
  <ul>
    <li>Edith Cowan University, Australia</li>
    <li>University of Cape Breton, Canada</li>
    <li>University of Manitoba, Canada</li>
    <li>Cambrian College of Applied Arts and Technology, Canada</li>
    <li>Northumbria University, UK</li>
  </ul>

  <h3>MoUs with Corporate World</h3>
  <ul>
    <li>Infosys - Campus Connect Programme</li>
    <li>Caritor – Adept</li>
    <li>Hexaware – Foundation Training Programme</li>
    <li>Oracle – Workforce Development Programme</li>
  </ul>

  <h3>Courses Offered</h3>
  <h4 style="color: #27ae60;">UG Programmes</h4>
<table style="width: 100%; border-collapse: collapse;">
  <tr>
    <td style="padding: 8px; width: 50%;"><strong>B.E – Mechanical Engineering</strong></td>
    <td style="padding: 8px; width: 50%;"><strong>B.E – Electronics and Communication Engineering</strong></td>
  </tr>
  <tr>
    <td style="padding: 8px;"><strong>B.E – Electrical & Electronics Engineering</strong></td>
    <td style="padding: 8px;"><strong>B.E – Computer Science & Engineering</strong></td>
  </tr>
  <tr>
    <td style="padding: 8px;"><strong>B.E – Civil Engineering</strong></td>
    <td style="padding: 8px;"><strong>B.Tech – Information Technology</strong></td>
  </tr>
  <tr>
    <td style="padding: 8px;"><strong>B.Tech – Electronics and Instrumentation Engineering</strong></td>
    <td style="padding: 8px;"><strong>B.Tech – Computer Science & Business Systems</strong></td>
  </tr>
</table>

<h4 style="color: #27ae60;">PG Programmes</h4>
<table style="width: 100%; border-collapse: collapse;">
  <tr>
    <td style="padding: 8px; width: 50%;"><strong>M.E – CAD/CAM</strong></td>
    <td style="padding: 8px; width: 50%;"><strong>M.E – Computer Science & Engineering</strong></td>
  </tr>
  <tr>
    <td style="padding: 8px;"><strong>M.E – Structural Engineering</strong></td>
    <td style="padding: 8px;"><strong>M.E – Embedded System Technologies</strong></td>
  </tr>
  <tr>
    <td style="padding: 8px;"><strong>M.E – Applied Electronics</strong></td>
    <td style="padding: 8px;"><strong>M.E – Power Electronics & Drives</strong></td>
  </tr>
  <tr>
    <td style="padding: 8px;"><strong>M.E – VLSI Design</strong></td>
    <td style="padding: 8px;"><strong>M.C.A – Master of Computer Applications</strong></td>
  </tr>
</table>
</div>

</body>
</html>
