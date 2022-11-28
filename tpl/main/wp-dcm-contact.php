<style>
  @media only screen and (max-width: 768px) {
    .dcm-footer-sticky-icon {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 0.7rem;
      background: #efefef;
    }

    .dcm-footer-sticky-icon>div>a {
      text-decoration: none;
    }

    .coccoc-alo-ph-circle {
      width: 160px;
      height: 160px;
      top: 20px;
      left: 20px;
      position: absolute;
      background-color: transparent;
      -webkit-border-radius: 100%;
      -moz-border-radius: 100%;
      border-radius: 100%;
      border: 2px solid rgba(30, 30, 30, 0.4);
      opacity: 0.1;
      -webkit-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
      -moz-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
      -ms-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
      -o-animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
      animation: coccoc-alo-circle-anim 1.2s infinite ease-in-out;
      -webkit-transition: all 0.5s;
      -moz-transition: all 0.5s;
      -o-transition: all 0.5s;
      transition: all 0.5s;
    }

    .coccoc-alo-phone {
      background-color: transparent;
      cursor: pointer;
      z-index: 200000 !important;
      -webkit-backface-visibility: hidden;
      -webkit-transform: translateZ(0);
      -webkit-transition: visibility 0.5s;
      -moz-transition: visibility 0.5s;
      -o-transition: visibility 0.5s;
      transition: visibility 0.5s;
      right: 150px;
      top: 30px;
    }

    .coccoc-alo-phone.coccoc-alo-green .coccoc-alo-ph-circle-fill {
      background-color: rgba(0, 175, 242, 0.5);
      opacity: 0.75 !important;
    }

    .coccoc-alo-ph-circle-fill {
      width: 100px;
      height: 100px;
      top: 50px;
      left: 50px;
      position: absolute;
      background-color: #000;
      -webkit-border-radius: 100%;
      -moz-border-radius: 100%;
      border-radius: 100%;
      border: 2px solid transparent;
      opacity: 0.1;
      -webkit-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
      -moz-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
      -ms-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
      -o-animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
      animation: coccoc-alo-circle-fill-anim 2.3s infinite ease-in-out;
      -webkit-transition: all 0.5s;
      -moz-transition: all 0.5s;
      -o-transition: all 0.5s;
      transition: all 0.5s;
    }

    .coccoc-alo-ph-img-circle {
      width: 60px;
      height: 60px;
      background: rgba(30, 30, 30, 0.1) url(https://drive.google.com/uc?id=1V3N2b79QjDWetC_ss9wI3c-xpWDymn9R) no-repeat center center;
      -webkit-border-radius: 100%;
      -moz-border-radius: 100%;
      border-radius: 100%;
      border: 2px solid transparent;
      opacity: 0.7;
      -webkit-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
      -moz-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
      -ms-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
      -o-animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
      animation: coccoc-alo-circle-img-anim 1s infinite ease-in-out;
    }

    .coccoc-alo-phone.coccoc-alo-green .coccoc-alo-ph-img-circle {
      background-color: #00aff2;
    }

    .coccoc-alo-phone.coccoc-alo-green .coccoc-alo-ph-circle {
      border-color: #00aff2;
      opacity: 0.5;
    }

    .coccoc-alo-phone.coccoc-alo-green.coccoc-alo-hover .coccoc-alo-ph-circle,
    .coccoc-alo-phone.coccoc-alo-green:hover .coccoc-alo-ph-circle {
      border-color: #75eb50;
      opacity: 0.5;
    }

    .coccoc-alo-phone.coccoc-alo-green.coccoc-alo-hover .coccoc-alo-ph-circle-fill,
    .coccoc-alo-phone.coccoc-alo-green:hover .coccoc-alo-ph-circle-fill {
      background-color: rgba(117, 235, 80, 0.5);
      opacity: 0.75 !important;
    }

    .coccoc-alo-phone.coccoc-alo-green.coccoc-alo-hover .coccoc-alo-ph-img-circle,
    .coccoc-alo-phone.coccoc-alo-green:hover .coccoc-alo-ph-img-circle {
      background-color: #75eb50;
    }

    @-moz-keyframes coccoc-alo-circle-anim {
      0% {
        transform: rotate(0) scale(0.5) skew(1deg);
        opacity: 0.1;
      }

      30% {
        transform: rotate(0) scale(0.7) skew(1deg);
        opacity: 0.5;
      }

      100% {
        transform: rotate(0) scale(1) skew(1deg);
        opacity: 0.1;
      }
    }

    @-webkit-keyframes coccoc-alo-circle-anim {
      0% {
        transform: rotate(0) scale(0.5) skew(1deg);
        opacity: 0.1;
      }

      30% {
        transform: rotate(0) scale(0.7) skew(1deg);
        opacity: 0.5;
      }

      100% {
        transform: rotate(0) scale(1) skew(1deg);
        opacity: 0.1;
      }
    }

    @-o-keyframes coccoc-alo-circle-anim {
      0% {
        transform: rotate(0) scale(0.5) skew(1deg);
        opacity: 0.1;
      }

      30% {
        transform: rotate(0) scale(0.7) skew(1deg);
        opacity: 0.5;
      }

      100% {
        transform: rotate(0) scale(1) skew(1deg);
        opacity: 0.1;
      }
    }

    @keyframes coccoc-alo-circle-anim {
      0% {
        transform: rotate(0) scale(0.5) skew(1deg);
        opacity: 0.1;
      }

      30% {
        transform: rotate(0) scale(0.7) skew(1deg);
        opacity: 0.5;
      }

      100% {
        transform: rotate(0) scale(1) skew(1deg);
        opacity: 0.1;
      }
    }

    @-moz-keyframes coccoc-alo-circle-fill-anim {
      0% {
        transform: rotate(0) scale(0.7) skew(1deg);
        opacity: 0.2;
      }

      50% {
        transform: rotate(0) scale(1) skew(1deg);
        opacity: 0.2;
      }

      100% {
        transform: rotate(0) scale(0.7) skew(1deg);
        opacity: 0.2;
      }
    }

    @-webkit-keyframes coccoc-alo-circle-fill-anim {
      0% {
        transform: rotate(0) scale(0.7) skew(1deg);
        opacity: 0.2;
      }

      50% {
        transform: rotate(0) scale(1) skew(1deg);
        opacity: 0.2;
      }

      100% {
        transform: rotate(0) scale(0.7) skew(1deg);
        opacity: 0.2;
      }
    }

    @-o-keyframes coccoc-alo-circle-fill-anim {
      0% {
        transform: rotate(0) scale(0.7) skew(1deg);
        opacity: 0.2;
      }

      50% {
        transform: rotate(0) scale(1) skew(1deg);
        opacity: 0.2;
      }

      100% {
        transform: rotate(0) scale(0.7) skew(1deg);
        opacity: 0.2;
      }
    }

    @keyframes coccoc-alo-circle-fill-anim {
      0% {
        transform: rotate(0) scale(0.7) skew(1deg);
        opacity: 0.2;
      }

      50% {
        transform: rotate(0) scale(1) skew(1deg);
        opacity: 0.2;
      }

      100% {
        transform: rotate(0) scale(0.7) skew(1deg);
        opacity: 0.2;
      }
    }

    @-moz-keyframes coccoc-alo-circle-img-anim {
      0% {
        transform: rotate(0) scale(1) skew(1deg);
      }

      10% {
        transform: rotate(-25deg) scale(1) skew(1deg);
      }

      20% {
        transform: rotate(25deg) scale(1) skew(1deg);
      }

      30% {
        transform: rotate(-25deg) scale(1) skew(1deg);
      }

      40% {
        transform: rotate(25deg) scale(1) skew(1deg);
      }

      50% {
        transform: rotate(0) scale(1) skew(1deg);
      }

      100% {
        transform: rotate(0) scale(1) skew(1deg);
      }
    }

    @-webkit-keyframes coccoc-alo-circle-img-anim {
      0% {
        transform: rotate(0) scale(1) skew(1deg);
      }

      10% {
        transform: rotate(-25deg) scale(1) skew(1deg);
      }

      20% {
        transform: rotate(25deg) scale(1) skew(1deg);
      }

      30% {
        transform: rotate(-25deg) scale(1) skew(1deg);
      }

      40% {
        transform: rotate(25deg) scale(1) skew(1deg);
      }

      50% {
        transform: rotate(0) scale(1) skew(1deg);
      }

      100% {
        transform: rotate(0) scale(1) skew(1deg);
      }
    }

    @-o-keyframes coccoc-alo-circle-img-anim {
      0% {
        transform: rotate(0) scale(1) skew(1deg);
      }

      10% {
        transform: rotate(-25deg) scale(1) skew(1deg);
      }

      20% {
        transform: rotate(25deg) scale(1) skew(1deg);
      }

      30% {
        transform: rotate(-25deg) scale(1) skew(1deg);
      }

      40% {
        transform: rotate(25deg) scale(1) skew(1deg);
      }

      50% {
        transform: rotate(0) scale(1) skew(1deg);
      }

      100% {
        transform: rotate(0) scale(1) skew(1deg);
      }
    }

    @keyframes coccoc-alo-circle-img-anim {
      0% {
        transform: rotate(0) scale(1) skew(1deg);
      }

      10% {
        transform: rotate(-25deg) scale(1) skew(1deg);
      }

      20% {
        transform: rotate(25deg) scale(1) skew(1deg);
      }

      30% {
        transform: rotate(-25deg) scale(1) skew(1deg);
      }

      40% {
        transform: rotate(25deg) scale(1) skew(1deg);
      }

      50% {
        transform: rotate(0) scale(1) skew(1deg);
      }

      100% {
        transform: rotate(0) scale(1) skew(1deg);
      }
    }





    .envelope {
      position: relative;
      align-self: center;
      margin: 0 auto;
      width: 100px;
      height: 75px;
      background-color: #94BDE5;
    }

    .dcm-icon--email:hover {
      cursor: pointer;
    }

    .dcm-icon--email:hover .moves {
      transform: rotateX(180deg) translateY(50px);
      -webkit-transform: rotateX(180deg) translateY(50px);
      -ms-transform: rotateX(180deg) translateY(50px);
      transition: .001s 0s;
    }

    .dcm-icon--email:hover .letter {
      z-index: 40;
      transform: translateY(-10px);
      -webkit-transform: translateY(-10px);
      -ms-transform: translateY(-10px);

    }

    .envelope-front {
      width: 100px;
      height: 75px;
      background-color: #94BDE5;
      position: absolute;
      z-index: 50;
      -webkit-clip-path: polygon(50% 55%, 100% 1%, 100% 100%, 0 100%, 0 0);
      clip-path: polygon(50% 55%, 100% 1%, 100% 100%, 0 100%, 0 0);
    }

    .envelope-flap {
      width: 0;
      height: 0;
      border-left: 50px solid transparent;
      border-right: 50px solid transparent;
      border-top: 50px solid #6393BF;
      position: absolute;
    }

    .envelope-flap.moves {
      z-index: 30;
      transition: .001s .45s;
    }

    .letter {
      height: 60px;
      width: 75px;
      display: block;
      background-color: #ffffff;
      position: absolute;
      left: 12.5px;
      z-index: 20;
      transition: all .5s ease-in-out;
    }
  }
</style>

<div class="dcm-footer-sticky">
  <div class="dcm-footer-sticky-icon">

    <div class="dcm-icon--call">
      <div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show">
        <div class="coccoc-alo-ph-img-circle"></div>
      </div>
    </div>
    <div class="dcm-icon--email">
      <div class="envelope">
        <div class="envelope-front">
        </div>
        <div class="envelope-flap">
        </div>
        <div class="envelope-flap moves">
        </div>
        <div class="letter">
        </div>
      </div>
    </div>
  </div>
</div>