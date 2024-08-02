<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
@import url('https://fonts.googleapis.com/css2?family=Raleway:wght@700&display=swap');


/* DEFAULTS */
/* ========================================================================== */


h1 {
  color: hsla(32 50% 50% / .8);

  position: fixed;
  left: -100px;
  top: 50%;
  margin: 0;

  transform: rotate(-90deg) translateY(-50%);
}


/* C */
/* ========================================================================== */
.c {
  min-width: 700px;
  width: 100%;
  height: 600px;
  border-radius: 12px;
  padding: 20px;
  padding-bottom: 40px;
  box-shadow: 0 8px 48px 2px hsla(10 6% 15% / .4);
  align-self: center;
  display: flex;
  align-items: flex-end;
  justify-content: center;

  position: relative;
  overflow: hidden;
  background: hsl(0 0% 90%);

  box-sizing: border-box;
}

.ci {
  position: absolute;
  top: 0;
  left: 0;

  width: inherit;
  height: inherit;
  transform-origin: left 50%;

  background: inherit;

  z-index: var(--z);
  transition: .3s ease-out;
}

.ci img {
  -moz-user-select: none;
  user-select: none;
  width: 100%;
}



input {
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  z-index: -10;
}

label {
  width: 10%;
  height: 10px;
  margin-right: 4px;
  border-radius: 20px;

  background: hsla(0 0% 90% / .3);
  cursor: pointer;

  position: relative;
  z-index: 10;
}

label:last-child {
  margin-right: 0;
}

input:checked+label {
  background: linear-gradient(to right,
    hsla(var(--hue) 80% 70% / .7),
    hsla(calc(var(--hue) + 30) 80% 50% / .7));
}

input:not(:checked)+label+.ci {
  transform: translateX(-100%);
  opacity: 0;
}

input:checked+label+.ci~.ci {
  transform: translateX(100%);
}

input:not(:checked)+label+.ci {
  transition: 0;
}
img{
  width: 100%;
  height: 600px;
}


</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="student.php">User Login</a>
  <a href="admin_hostel/admin.php">Admin login</a>
  <a href="newuser.php">New User</a>
</div>
<br>

<div class="c">
  <input type="radio" name="a" id="cr-1" checked>
  <label for="cr-1" style="--hue: 32"></label>
  <div class="ci" style="--z: 4">
    <img src="clg.jpg" alt="first silde">
  </div>

  <input type="radio" name="a" id="cr-2">
  <label for="cr-2" style="--hue: 82"></label>
  <div class="ci" style="--z: 3">
    <img src="R.jpeg" alt="second silde">
</div>

  <input type="radio" name="a" id="cr-3">
  <label for="cr-3" style="--hue: 40"></label>
  <div class="ci" style="--z: 2">
    <img src="Re.jpeg" alt="thrid silde">
  </div>

  <input type="radio" name="a" id="cr-4">
  <label for="cr-4" style="--hue: 210"></label>
  <div class="ci" style="--z: 1">
    <img src="Reg.jpg" alt="fouth silde">
  </div>
</div>
<div>
  <p>
  MCET - Realization of a grand dream
Dr. Mahalingam College of Engineering and Technology ( MCET ) is a self-financing educational institution situated in Pollachi, Coimbatore District. MCET is the vision of Arutchelvar Dr. N. Mahalingam, whose determination and dynamism made possible the realization of this institution of excellence. MCET was established in 1998 to commemorate the 75th birthday of this great visionary Arutchelvar Dr. N. Mahalingam.

Unique Facilities in the Campus
* 1800+ computers * Single mode fiber optic cable connecting all 1800+ computers  * 200 Mbps internet connectivity * Computerized Library Functioning all 365 days * Modernized Boys & Girls Hostel with Internet Facilities * Multipurpose Indoor Sports Auditorium with 4000 seating capacity * World class Internet Data Center * Presence of various clubs viz Rotarct, Consumer, ECO, Renewable Energy, Fine Arts, Tamil Mandram etc., * Video Conferencing facilities. * Tele education facilities through Edusat * Yoga & Meditation Hall * Language Learning Centre * Driving School.

MoUs with International Universities
* Edith Cowan University, Australia * University of Cape Breton, Canada * University of Manitoba, Canada  * Cambrain college of Applied Arts and Technology, Canada * Northumbria University, UK

MoUs with Corporate World
* Infosys-Campus Connect Programme * Caritor – Adept * Hexaware – Foundation Training Programme * Oracle – Workforce Development Programme.

Courses Offered
UG Programmes
icon-14 B.E – Mechanical Engineering – 120 *
icon-14 B.E – Electronics and Communication Engineering – 120 *
icon-14 B.E – Electrical & Electronics Engineering – 120 *
icon-14 B.E – Computer Science & Engineering – 120 * 
icon-14 B.Tech – Information Technology – 120
icon-14 B.E – Automobile Engineering – 60 *
icon-14 B.E – Civil Engineering – 60 *
icon-14 B.Tech – Artificial Intelligence & Data Science – 120
icon-14 B.E – Computer Science & Engineering (Artificial Intelligence & Machine Learning)  – 60
icon-14 B.E – Computer Science & Engineering (Cyber Security)  – 60

* Tier 1 – Accredited by NBA

PG Programmes
icon-14 M.E ( CAD/CAM ) – 6

icon-14 M.E ( Embedded System Technologies )  – 12

icon-14 M.E ( Computer Science and Engineering )

icon-14 M.E (Communication Systems) – 12/

icon-14 M.E (Structural Engineering) – 6

icon-14 MCA – Master of Computer Applications – 60

Research Programmes ( Ph.D)
icon-14 Mechanical Engineering

icon-14 Department of Physics

icon-14 Computer Science and Engineering

icon-14 Electronics and Communication Engineering

icon-14 Civil Engineering

icon-14 Department of Information Technology *

icon-14 Department of Electrical & Electronics Engineering *

icon-14 Department of Automobile Engineering *
</p>
</div>
</body>
</html>