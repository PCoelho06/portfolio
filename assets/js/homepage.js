const homepageIllustration = document.getElementById("homepage-illustration");
const body = document.querySelector("body");

const context = homepageIllustration.getBoundingClientRect();

const mx = (context.left + context.right) / 2;
const my = (context.top + context.bottom) / 2;

body.addEventListener("mousemove", (e) => {
  const abscisse = mx - e.clientX;
  const ordonnee = my - e.clientY;

  let angle =
    Math.atan(Math.abs(ordonnee) / Math.abs(abscisse)) * (180 / Math.PI);

  if (abscisse > 0) {
    if (ordonnee < 0) {
      angle = -angle;
    }
    angle = Math.max(Math.min(angle, 20), -15);
  } else {
    if (ordonnee > 0) {
      angle = -angle;
    }
    angle = Math.max(Math.min(angle, 20), -15);
  }

  /* const transform =
    "rotate3d(" +
    Math.abs(abscisse) / 50 +
    "," +
    Math.abs(ordonnee) / 50 +
    "," +
    (Math.abs(abscisse) + Math.abs(ordonnee)) / 50 +
    "," +
    angle +
    "deg)"; */
  //   const transform = "rotate3d(0,1,0,60deg)";
  const transform = "rotate3d(0,1,0,30deg)";

  homepageIllustration.style.setProperty("transform", transform);
});
