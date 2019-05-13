<!--------------------------------------------------------------------
 ! CSS UNIVERSAL
 !-------------------------------------------------------------------->

<style type="text/css">

    ::selection { background-color: #FF6F61; color: #A3A991; }
    ::-moz-selection { background-color: #FF6F61; color: #A3A991; }
    
    @font-face {
        font-family: opendyslexicregular;
        src: url('opendyslexic-regular-webfont.woff2') format('woff2'),
             url('opendyslexic-regular-webfont.woff') format('woff');
    }
    
    body {
        background-color: #34372C;
        color: #A3A991;
        font-family: opendyslexicregular, Arial, sans-serif;
        font-weight:normal;
        font-style:normal;
    }
    
    .comment {
        height: auto;
        background-color: #34372C;
        border-radius: 10px;
        position: fixed;
        bottom: 50px;
        z-index: 1000;
    }
    
    .comment_spacer {
        width: 100%;
        height: 360px;
    }
    
    #container {
        width: 100vw;
        height: 100vh;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    
    .doodle {
        max-width: 100%;
        max-height: 100%;
        position:fixed;
        z-index: -1;
        overflow: hidden;
    }
    
    #content {
        width: auto;
        height: 80%;
        margin: auto;
        position: absolute;
        top: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }

    a {
        color: #8DAA91;
        background-color: transparent;
        font-weight: normal;
        text-decoration: none;
    }

    h1 {
        color: #A3A991;
        background-color: transparent;
        border-bottom: 1px solid #788475;
        font-weight: normal;
    }

    .category {
        text-decoration: none;
        background-color: #A3A991;
        border: 1px solid #788475;
        color: #34372C;
        display: block;
    }
    
    .subcategory {
        width: 95%;
        text-decoration: none;
        background-color: #A3A991;
        border: 1px solid #788475;
        color: #34372C;
        display: block;
        margin: 0 auto;
    }
    
    .details {
        width: 90%;
        display: block;
        margin: 0 auto;
        align-content: center;
    }
    
    .title {
        border-bottom: 1px solid #788475;
    }
    
    .detail {
        width: 90%;
        text-align: start;
        margin: 20px;
    }
    
    table, th, td {
     	border: 1px solid #788475;
    }
    
    th, td {
    	min-width: 100px;
    	padding-left: 10px;
    }
    
    p.footer {
        margin: auto;
        border-top: 1px solid #788475;
    }
    
    .icons {
        width: auto;
        padding: auto;
    }
    
/*--------------------------------------------------------------------
* CSS PORTRAIT
*--------------------------------------------------------------------*/

	@media all and (orientation:portrait) {
		body {
            font-size: 2rem;
		}
        
        .comment {
            left: 260px;
            right: 50px;
            font-size: 1.5rem;
        }
		
		#content {
            width: 90%;
            left: 50%;
		}
		
		h1 {
            font-size: 2.5rem;
            margin-bottom: 2.5rem;
		}
		
		.category {
            font-size: 3rem;
            line-height: 5rem;
            
		}
        
        .subcategory {
            font-size: 1.5rem;
            line-height: 4rem;
            
		}
        
        .title {
            font-size: 1.5rem;
        }

        .detail {
            font-size: 1.5rem;
            line-height: 2rem;
        }

		p.footer {
            font-size: 2rem;
            line-height: 5rem;
            margin-top: 2.5rem
		}
        
        #greengeeks {
            height: 200px;
        }
	}
            
/*--------------------------------------------------------------------
 * CSS LANDSCAPE
 *--------------------------------------------------------------------*/

	@media all and (orientation:landscape) { 
		body {
		  font-size: 1.5rem;
		}
        
        .comment {
            width: 300px;
            left: 160px;
            font-size: 1rem;
        }
        
        #content {
            width: 30%;
            min-width: 460px;
            left: 70%;
		}
		
		h1 {
		  font-size: 2rem;
		  margin-bottom: 2rem;
		}
		
		.category {
            font-size: 2rem;
            line-height: 4rem;
            
		}
        
        .subcategory {
            font-size: 1rem;
            line-height: 3rem;
            
		}
        
        .title {
            font-size: 1rem;
        }

        .detail {
            font-size: 1rem;
            line-height: 1.5rem;
        }
		
		p.footer {
            font-size: 1.5rem;
            line-height: 3rem;
            margin-top: 2rem;
		}
        
        #greengeeks {
            height: 100px;
        }
	}
    
</style>

