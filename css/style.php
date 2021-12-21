<style type ="text/css">
html{
	scroll-behavior: smooth;
}
*{margin: 0; padding: 0; box-sizing:border-box; font-family: 'Mulish', sans-serif;  }

.row{
	margin-right:0!important;
	margin-left:0!important;
}
.navbar-toggler{
	background-color:white!important;
	color:#a29bfe!important;
}
.nav_style{
    background-color: #a29bfe!important;
}
.nav_style a{
    color:white;

}
.navbar-brand{
	font-weight: bold;
}

/*//////////main header\\\\\\\*/
.main_header{
	height: 450px;
	width: 100%;
}
.rightside h1{
	font-size: 3rem;
}
.corona_rot img{
	animation: gocorona 3s linear infinite;
}
@keyframes gocorona{
	0% { transform: rotate(0); }
	100% { transform: rotate(360deg); }
}

.leftside img{
	animation: heartbeat 5s linear infinite;
}
@keyframes heartbeat{
	0% { transform: scale(0.75); }
	20% {transform: scale(1);}
	40% { transform: scale(0.75); }
	60% {transform: scale(1);}
	80% { transform: scale(0.75); }
	100% {transform: scale(0.75);}

}
/***********************corona updates***********************/
.corona_updates{
	margin: 0 0 30px 0;
}
.corona_updates h3{
	color: #ff7675;
}
.corona_updates h1{
	font-size: 2rem;
}
.hi h1{
	background-color: black;
	color: white;
}
.sub_section{
	background-color: #fafbfd;
}
.footer_style{
	background-color: #a29bfe!important;
}
.footer_style p{
	margin-bottom:  0!important;
	margin-right:   0!important;
	margin-left:   0!important;
}
#myBtn {
    display:none;
    position: fixed;
    bottom: 30px;
    right: 40px;
    z-index: 99;
    background-color: #00A8FF;
    color: white;
    outline: none;
    cursor: pointer;
    padding: 10px;
    border-radius: 10px; 
}
#myBtn:hover{
	background-color: #606060;
}

@media(max-width:760px){
	.main_header{ height:700px; text-align: center; }
	.main_header h1{ 
		text-align:center;
		padding:0;
		width:100%;
		font-size:45px;
	}
	.count_style{
		display:inline!important;
	}
	.count_style p{
		text-align:center;
	}
	.about_res{
		margin-left:0!important;
	}
}
</style>






























