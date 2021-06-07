<style>
/* ////////////////  whole html page ///////////// */

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Mulish', sans-serif;
} 

html{
    scroll-behavior: smooth;
}

/* /////////// nav bar ///////////////// */
.nav_style{
	background-color: #a29bfe;
} 


/* //////////// top left side image  /////////////// */
.leftside img{
  margin-top: 40px;
  animation: heartbeat 5s linear infinite;
}

/* ///////////////// animation in this image ////////////// */
@keyframes heartbeat
{
  0%
  {
     transform: scale(.75);
 }
 20%
 {
     transform: scale(1);
 }
 40%
 {
     transform: scale(.75);
 }
 60%
 {
     transform: scale(1);
 }
 80%
 {
     transform: scale(.75);
 }
 100%
 {
     transform: scale(.75);
 }
}

/* /////////////////  right side image ////////////// */
.rightside h1{
  font-size : 3rem;
}
.corona_rot img{
   animation: corona 3s linear infinite;
}

/* /////////////////  animation in this image////////////////// */
@keyframes corona{
  0%{transform: rotate(0);}
  100%{transform: rotate(360deg);}
}


/* //////////////  live count table section //////////////// */
.corona-update{
    margin: 0 0 30px 0;
}

.corona-update h3{
    color : #ff7675;
}

/* ////////////// about   ///////////////// */
.about{
    background-color: #fbfafd;
}

/* ///////////////////  scroll button //////////////// */
#mybtn{
    /* display: none; */
    position: fixed;
    bottom: 25px;
    right: 30px;
    z-index: 99;
    border: none;
    outline: none;
    background-color: #00A8FF;
    color: white;
    cursor: pointer;
    padding: 7px;
    border-radius: 10px;

}
#mybtn:hover{
    background:  #606060;
}



/* ///////////// footer /////////////// */
.footer-style{
    background-color: black;
}

.footer-style p{
    margin-bottom: 0!important;
}

</style>
