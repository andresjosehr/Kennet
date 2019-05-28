<?php
   include("conexion.php");
   
   ?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>AVVS Amas y Nanas</title>
      <!--INI_SCRIPT------------------------------------------------------------------------------> 
      <?php AddJs(); ?>
      <script type="text/javascript" src="funciones.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/fontawesome.css">
      <!-- <script type="text/javascript" src="avs_emp_backoffice.js"></script> -->
      <!--FIN_SCRIPT------------------------------------->  
      <script>
         $(document).ready(function(){  
         
            Inicializar();
         
         });
         
      </script>  
   </head>
   <body  <?php echo $LStrMsg;?> >
      <?php  require_once('avs_emp_header.php'); ?>
      <?php  require_once('avs_emp_header_buscar.php'); ?>


      <style class="cp-pen-styles">
        #frame {
            width: 95%;
            min-width: 360px;
            max-width: 1000px;
            height: 92vh;
            min-height: 300px;
            max-height: 720px;
            background: #E6EAEA;
            margin: 0 auto;
            border-top: 3px solid #ababab !important;
            border-right: 1px solid #ababab !important;
          }

          @media screen and (max-width: 360px) {
            #frame {
              width: 100%;
              height: 100vh;
            }
          }

          #frame #sidepanel {
            float: left;
            min-width: 280px;
            max-width: 340px;
            width: 40%;
            height: 100%;
            background: #2c3e50;
            color: #f5f5f5;
            overflow: hidden;
            position: relative;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel {
              width: 58px;
              min-width: 58px;
            }
          }

          #frame #sidepanel #profile {
            width: 80%;
            margin: 25px auto;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile {
              width: 100%;
              margin: 0 auto;
              padding: 5px 0 0 0;
              background: white;
            }
          }

          #frame #sidepanel #profile.expanded .wrap {
            height: 210px;
            line-height: initial;
          }

          #frame #sidepanel #profile.expanded .wrap p {
            margin-top: 20px;
          }

          #frame #sidepanel #profile.expanded .wrap i.expand-button {
            -moz-transform: scaleY(-1);
            -o-transform: scaleY(-1);
            -webkit-transform: scaleY(-1);
            transform: scaleY(-1);
            filter: FlipH;
            -ms-filter: "FlipH";
          }

          #frame #sidepanel #profile .wrap {
            height: 60px;
            line-height: 60px;
            overflow: hidden;
            -moz-transition: 0.3s height ease;
            -o-transition: 0.3s height ease;
            -webkit-transition: 0.3s height ease;
            transition: 0.3s height ease;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap {
              height: 55px;
            }
          }

          #frame #sidepanel #profile .wrap img {
            width: 50px;
            border-radius: 50%;
            padding: 3px;
            border: 2px solid #e74c3c;
            height: auto;
            float: left;
            cursor: pointer;
            -moz-transition: 0.3s border ease;
            -o-transition: 0.3s border ease;
            -webkit-transition: 0.3s border ease;
            transition: 0.3s border ease;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap img {
              width: 40px;
              margin-left: 8px;
            }
          }

          #frame #sidepanel #profile .wrap img.online {
            border: 2px solid #2ecc71;
          }

          #frame #sidepanel #profile .wrap img.away {
            border: 2px solid #f1c40f;
          }

          #frame #sidepanel #profile .wrap img.busy {
            border: 2px solid #e74c3c;
          }

          #frame #sidepanel #profile .wrap img.offline {
            border: 2px solid #95a5a6;
          }

          #frame #sidepanel #profile .wrap p {
            float: left;
            margin-left: 15px;
          }

          #frame #sidepanel #profile #alerts .wrap p {
            float: none;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap p {
              display: none;
            }
          }

          #frame #sidepanel #profile .wrap i.expand-button {
            float: right;
            margin-top: 23px;
            font-size: 0.8em;
            cursor: pointer;
            color: #435f7a;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap i.expand-button {
              display: none;
            }
          }

          #frame #sidepanel #profile .wrap #status-options {
            position: absolute;
            opacity: 0;
            visibility: hidden;
            width: 150px;
            margin: 70px 0 0 0;
            border-radius: 6px;
            z-index: 99;
            line-height: initial;
            background: #435f7a;
            -moz-transition: 0.3s all ease;
            -o-transition: 0.3s all ease;
            -webkit-transition: 0.3s all ease;
            transition: 0.3s all ease;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options {
              width: 58px;
              margin-top: 57px;
            }
          }

          #frame #sidepanel #profile .wrap #status-options.active {
            opacity: 1;
            visibility: visible;
            margin: 75px 0 0 0;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options.active {
              margin-top: 62px;
            }
          }

          #frame #sidepanel #profile .wrap #status-options:before {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-bottom: 8px solid #435f7a;
            margin: -8px 0 0 24px;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options:before {
              margin-left: 23px;
            }
          }

          #frame #sidepanel #profile .wrap #status-options ul {
            overflow: hidden;
            border-radius: 6px;
          }

          #frame #sidepanel #profile .wrap #status-options ul li {
            padding: 15px 0 30px 18px;
            display: block;
            cursor: pointer;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options ul li {
              padding: 15px 0 35px 22px;
            }
          }

          #frame #sidepanel #profile .wrap #status-options ul li:hover {
            background: #496886;
          }

          #frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
            position: absolute;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            margin: 5px 0 0 0;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
              width: 14px;
              height: 14px;
            }
          }

          #frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
            content: '';
            position: absolute;
            width: 14px;
            height: 14px;
            margin: -3px 0 0 -3px;
            background: transparent;
            border-radius: 50%;
            z-index: 0;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
              height: 18px;
              width: 18px;
            }
          }

          #frame #sidepanel #profile .wrap #status-options ul li p {
            padding-left: 12px;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #profile .wrap #status-options ul li p {
              display: none;
            }
          }

          #frame #sidepanel #profile .wrap #status-options ul li#status-online span.status-circle {
            background: #2ecc71;
          }

          #frame #sidepanel #profile .wrap #status-options ul li#status-online.active span.status-circle:before {
            border: 1px solid #2ecc71;
          }

          #frame #sidepanel #profile .wrap #status-options ul li#status-away span.status-circle {
            background: #f1c40f;
          }

          #frame #sidepanel #profile .wrap #status-options ul li#status-away.active span.status-circle:before {
            border: 1px solid #f1c40f;
          }

          #frame #sidepanel #profile .wrap #status-options ul li#status-busy span.status-circle {
            background: #e74c3c;
          }

          #frame #sidepanel #profile .wrap #status-options ul li#status-busy.active span.status-circle:before {
            border: 1px solid #e74c3c;
          }

          #frame #sidepanel #profile .wrap #status-options ul li#status-offline span.status-circle {
            background: #95a5a6;
          }

          #frame #sidepanel #profile .wrap #status-options ul li#status-offline.active span.status-circle:before {
            border: 1px solid #95a5a6;
          }

          #frame #sidepanel #profile .wrap #expanded {
            padding: 100px 0 0 0;
            display: block;
            line-height: initial !important;
          }

          #frame #sidepanel #profile .wrap #expanded label {
            float: left;
            clear: both;
            margin: 0 8px 5px 0;
            padding: 5px 0;
          }

          #frame #sidepanel #profile .wrap #expanded input {
            border: none;
            margin-bottom: 6px;
            background: #32465a;
            border-radius: 3px;
            color: #f5f5f5;
            padding: 7px;
            width: calc(100% - 43px);
          }

          #frame #sidepanel #profile .wrap #expanded input:focus {
            outline: none;
            background: #435f7a;
          }

          #frame #sidepanel #search {
            border-bottom: 1px solid #dedede;
            font-weight: 300;
            padding: 19px;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #search {}
          }

          #frame #sidepanel #search label {
            position: absolute;
            margin: 10px 0 0 20px;
          }

          #frame #sidepanel #search input {
            font-family: "proxima-nova", "Source Sans Pro", sans-serif;
            padding: 10px 0 10px 46px;
            width: calc(100% - 25px);
            border: none;
            background: #32465a;
            color: #f5f5f5;
          }

          #frame #sidepanel #search input:focus {
            outline: none;
            background: #435f7a;
          }

          #frame #sidepanel #search input::-webkit-input-placeholder {
            color: #f5f5f5;
          }

          #frame #sidepanel #search input::-moz-placeholder {
            color: #f5f5f5;
          }

          #frame #sidepanel #search input:-ms-input-placeholder {
            color: #f5f5f5;
          }

          #frame #sidepanel #search input:-moz-placeholder {
            color: #f5f5f5;
          }

          #frame #sidepanel #contacts,
          #frame #sidepanel #alerts {
            height: calc(100% - 177px);
            overflow-y: auto;
            overflow-x: hidden;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #contacts,
            #frame #sidepanel #alerts {
              height: calc(100% - 149px);
              overflow-y: scroll;
              overflow-x: hidden;
            }
            #frame #sidepanel #contacts::-webkit-scrollbar,
            #frame #sidepanel #alerts::-webkit-scrollbar {
              display: none;
            }
          }

          #frame #sidepanel #contacts.expanded,
          #frame #sidepanel #alerts.expanded {
            height: calc(100% - 334px);
          }

          #frame #sidepanel #contacts::-webkit-scrollbar,
          #frame #sidepanel #alerts::-webkit-scrollbar {
            width: 8px;
            background: #2c3e50;
          }

          #frame #sidepanel #contacts::-webkit-scrollbar-thumb,
          #frame #sidepanel #alerts::-webkit-scrollbar-thumb {
            background-color: #243140;
          }

          #frame #sidepanel #contacts ul li.contact,
          #frame #sidepanel #alerts ul li.contact {
            position: relative;
            padding: 10px 0 15px 0;
            font-size: 0.9em;
            cursor: pointer;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #contacts ul li.contact,
            #frame #sidepanel #alerts ul li.contact {
              padding: 6px 0 46px 8px;
            }
          }

          #frame #sidepanel #contacts ul li.contact:hover,
          #frame #sidepanel #alerts ul li.contact:hover {
            background: #32465a;
          }

          #frame #sidepanel #contacts ul li.contact.active,
          #frame #sidepanel #alerts ul li.contact.active {
            background: #eee;
            border-left: 5px solid #435f7a;
          }

          #frame #sidepanel #contacts ul li.contact.active span.contact-status,
          #frame #sidepanel #alerts ul li.contact.active span.contact-status {
            border: 2px solid #32465a !important;
          }

          #frame #sidepanel #contacts ul li.contact .wrap,
          #frame #sidepanel #alerts ul li.contact .wrap {
            width: 88%;
            margin: 0 auto;
            position: relative;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #contacts ul li.contact .wrap,
            #frame #sidepanel #alerts ul li.contact .wrap {
              width: 100%;
            }
          }

          #frame #sidepanel #contacts ul li.contact .wrap span,
          #frame #sidepanel #alerts ul li.contact .wrap span {
            position: absolute;
            left: 0;
            margin: -2px 0 0 -2px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            border: 2px solid #2c3e50;
            background: #95a5a6;
          }

          #frame #sidepanel #contacts ul li.contact .wrap span.online,
          #frame #sidepanel #alerts ul li.contact .wrap span.online {
            background: #2ecc71;
          }

          #frame #sidepanel #contacts ul li.contact .wrap span.away,
          #frame #sidepanel #alerts ul li.contact .wrap span.away {
            background: #f1c40f;
          }

          #frame #sidepanel #contacts ul li.contact .wrap span.busy,
          #frame #sidepanel #alerts ul li.contact .wrap span.busy {
            background: #e74c3c;
          }

          #frame #sidepanel #contacts ul li.contact .wrap img,
          #frame #sidepanel #alerts ul li.contact .wrap img {
            width: 58px;
            border-radius: 50%;
            float: left;
            margin-right: 10px;
            margin-top: 7px;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #contacts ul li.contact .wrap img,
            #frame #sidepanel #alerts ul li.contact .wrap img {
              margin-right: 0px;
            }
          }

          #frame #sidepanel #contacts ul li.contact .wrap .meta,
          #frame #sidepanel #alerts ul li.contact .wrap .meta {
            padding: 5px 0 0 0;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #contacts ul li.contact .wrap .meta,
            #frame #sidepanel #alerts ul li.contact .wrap .meta {
              display: none;
            }
          }

          #frame #sidepanel #contacts ul li.contact .wrap .meta .name,
          .live_chat_name,
          #frame #sidepanel #alerts ul li.contact .wrap .meta .name,
          .live_chat_name {
            font-weight: 600;
            font-size: 18px;
            line-height: 0;
            margin-bottom: -7px;
          }

          #frame #sidepanel #contacts ul li.contact .wrap .meta .preview,
          #frame #sidepanel #alerts ul li.contact .wrap .meta .preview {
            margin: 5px 0 0 0;
            padding: 0 0 1px;
            font-weight: 400;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            -moz-transition: 1s all ease;
            -o-transition: 1s all ease;
            -webkit-transition: 1s all ease;
            transition: 1s all ease;
          }

          #frame #sidepanel #contacts ul li.contact .wrap .meta .preview span,
          #frame #sidepanel #alerts ul li.contact .wrap .meta .preview span {
            position: initial;
            border-radius: initial;
            background: none;
            border: none;
            padding: 0 2px 0 0;
            margin: 0 0 0 1px;
            opacity: .5;
          }

          #frame #sidepanel #bottom-bar {
            position: absolute;
            width: 100%;
            bottom: 0;
          }

          #frame #sidepanel #bottom-bar button {
            float: left;
            border: none;
            width: 50%;
            padding: 10px 0;
            background: #32465a;
            color: #f5f5f5;
            cursor: pointer;
            font-size: 0.85em;
            font-family: "proxima-nova", "Source Sans Pro", sans-serif;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #bottom-bar button {
              float: none;
              width: 100%;
              padding: 15px 0;
            }
          }

          #frame #sidepanel #bottom-bar button:focus {
            outline: none;
          }

          #frame #sidepanel #bottom-bar button:nth-child(1) {
            border-right: 1px solid #2c3e50;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #bottom-bar button:nth-child(1) {
              border-right: none;
              border-bottom: 1px solid #2c3e50;
            }
          }

          #frame #sidepanel #bottom-bar button:hover {
            background: #435f7a;
          }

          #frame #sidepanel #bottom-bar button i {
            margin-right: 3px;
            font-size: 1em;
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #bottom-bar button i {
              font-size: 1.3em;
            }
          }

          @media screen and (max-width: 735px) {
            #frame #sidepanel #bottom-bar button span {
              display: none;
            }
          }

          #frame .content {
            float: right;
            width: 60%;
            height: 100%;
            overflow: hidden;
            position: relative;
          }

          @media screen and (max-width: 735px) {
            #frame .content {
              width: calc(100% - 58px);
              min-width: 300px !important;
            }
          }

          @media screen and (min-width: 900px) {
            #frame .content {
              width: calc(100% - 340px);
            }
          }

          #frame .content .contact-profile {
            width: 100%;
            height: 60px;
            line-height: 60px;
            background: #f5f5f5;
          }

          #frame .content .contact-profile img {
            width: 60px;
            border-radius: 50%;
            float: left;
            margin: 9px 12px 0 9px;
          }

          #frame .content .contact-profile p {
            float: left;
          }

          #frame .content .contact-profile .social-media {
            float: right;
          }

          #frame .content .contact-profile .social-media i {
            margin-left: 14px;
            cursor: pointer;
          }

          #frame .content .contact-profile .social-media i:nth-last-child(1) {
            margin-right: 20px;
          }

          #frame .content .contact-profile .social-media i:hover {
            color: #435f7a;
          }

          #frame .content .messages {
            height: 76.8%;
            /* min-height: calc(100% - 93px); */
            /* max-height: calc(100% - 93px); */
            overflow-y: scroll;
            overflow-x: hidden;
            width: 100%;
          }

          @media screen and (max-width: 735px) {
            #frame .content .messages {
              max-height: calc(100% - 105px);
            }
          }

          #frame .content .messages::-webkit-scrollbar {
            width: 8px;
            background: transparent;
          }

          #frame .content .messages::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.3);
          }

          #frame .content .messages ul li {
            display: inline-block;
            clear: both;
            float: left;
            margin: 15px 15px 5px 15px;
            width: calc(100% - 25px);
            font-size: 0.9em;
          }

          #frame .content .messages ul li:nth-last-child(1) {
            margin-bottom: 20px;
          }

          #frame .content .messages ul li.sent img {
            margin: 6px 8px 0 0;
          }

          #frame .content .messages ul li.sent p {
            background: #435f7a;
            color: #f5f5f5;
          }

          #frame .content .messages ul li.replies img {
            float: right;
            margin: 6px 0 0 8px;
          }

          #frame .content .messages ul li.replies p {
            background: #f5f5f5;
            float: right;
          }

          #frame .content .messages ul li img {
            width: 22px;
            border-radius: 50%;
            float: left;
          }

          #frame .content .messages ul li p {
            display: inline-block;
            padding: 10px 15px;
            border-radius: 20px;
            max-width: 205px;
            line-height: 130%;
          }

          @media screen and (min-width: 735px) {
            #frame .content .messages ul li p {
              max-width: 300px;
            }
          }

          #frame .content .message-input {
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 99;
          }

          #frame .content .message-input .wrap {
            position: relative;
          }

          #frame .content .message-input .wrap input {
            font-family: "proxima-nova", "Source Sans Pro", sans-serif;
            float: left;
            border: none;
            width: calc(100% - 90px);
            padding: 11px 32px 10px 8px;
            font-size: 0.8em;
            color: #32465a;
          }

          @media screen and (max-width: 735px) {
            #frame .content .message-input .wrap input {
              padding: 15px 32px 16px 8px;
            }
          }

          #frame .content .message-input .wrap input:focus {
            outline: none;
          }

          #frame .content .message-input .wrap .attachment {
            position: absolute;
            right: 60px;
            z-index: 4;
            margin-top: 10px;
            font-size: 1.1em;
            color: #435f7a;
            opacity: .5;
            cursor: pointer;
          }

          @media screen and (max-width: 735px) {
            #frame .content .message-input .wrap .attachment {
              margin-top: 17px;
              right: 65px;
            }
          }

          #frame .content .message-input .wrap .attachment:hover {
            opacity: 1;
          }

          #frame .content .message-input .wrap button {
            float: right;
            border: none;
            width: 50px;
            padding: 12px 0;
            cursor: pointer;
            background: #32465a;
            color: #f5f5f5;
          }

          @media screen and (max-width: 735px) {
            #frame .content .message-input .wrap button {
              padding: 16px 0;
            }
          }

          #frame .content .message-input .wrap button:hover {
            background: #435f7a;
          }

          #frame .content .message-input .wrap button:focus {
            outline: none;
          }

          #frame #sidepanel a #frame #sidepanel b,
          #frame #sidepanel p,
          #frame #sidepanel div,
          #frame #sidepanel span,
          #frame #sidepanel i {
            color: black !important;
          }

          #sidepanel {
            background: white !important;
          }

          #frame #sidepanel #contacts ul li.contact,
          #frame #sidepanel #alerts ul li.contact {
            border-bottom: 1px solid #dedede !important;
          }

          #frame #sidepanel #contacts ul li.contact.active,
          #frame #sidepanel #alerts ul li.contact:hover {
            background: #eee !important;
          }

          #contacts,
          #alerts {
            border-left: 1px solid #dedede !important;
          }

          .content {
            background: white !important;
            border-left: 1px solid #dedede !important;
          }

          #frame .content .messages ul li.sent p {
            background: white;
            border: solid 1px #dedede;
            color: #444;
          }

          #frame .content .messages ul li.replies p {
            background: white;
            border: solid 1px #dedede;
            color: #444;
          }

          #frame .content .message-input {
            border: 1px solid #dedede !important;
            border-left: 0px !important;
          }

          #frame .content .message-input input {
            background: #dedede;
            height: 28px;
            margin-top: 10px;
            width: 69%;
          }


          }
          #frame #sidepanel #bottom-bar {
            background: white;
            border: 1px solid #dedede !important;
            padding: 25px;
          }
          .message-disclaimer {
            display: block;
            background: white;
            padding: 22px;
            border: 1px solid #dedede !important;
          }
          #frame #sidepanel .message-disclaimer p,
          #frame #sidepanel .message-disclaimer p a {
            text-align: center;
            font-size: 10px;
            width: 63%;
            margin: 0 auto;
          }
          .contact-profile {
            background: white;
          }
          #frame .content .contact-profile {
            background: white;
          }
          #frame .live_chat_name {
            line-height: 3 !important;
          }
          .profile-info-line2 {
            margin-top: -40px;
            margin-left: auto;
            font-size: 14px;
          }
          .tabs_section_chat {
            width: 100%;
            margin-top: 35px;
          }
          .tabs_section_chat .nav-item a {
            text-decoration: none;
          }
          .tabs_section_chat .cerca {
            margin-left: auto;
            margin-right: auto;
            text-transform: uppercase;
          }
          .tabs_section_chat .vistos {
            margin-left: auto;
            margin-right: auto;
            text-transform: uppercase;
          }
          .tabs_section_chat .favoritos {
            margin-left: auto;
            padding-right: 150px;
            text-transform: uppercase;
          }
          .tabs_section_chat .nav-tabs .nav-link.active {
            /* color: #495057; */
            /* background-color: #fff; */
            
            border-color: transparent;
            border-bottom: 4px solid #5552a0;
            margin-bottom: -3px;
            -webkit-transition: border-bottom .15s;
            /* Safari */
            
            -moz-transition: border-bottom .15s;
            /* Safari */
            
            -o-transition: border-bottom .15s;
            /* Safari */
            
            transition: border-bottom .15s;
          }
          .tabs_section_chat .nav-tabs {
            border-bottom: 4px solid #dee2e6;
          }
          .tabs_section_chat .nav-link:hover,
          .tabs_section_chat .nav-tabs .nav-link:focus {
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            margin-top: 1px;
          }
          .tabs_section_chat .favoritos .nav-link:hover,
          .nav-tabs .favoritos .nav-link:focus {
            margin-right: 1px;
          }
          .tabs_section_chat .cerca .nav-link:hover,
          .nav-tabs .cerca .nav-link:focus {
            margin-left: 1px;
          }
          .tabs_section_chat .card {
            border: 0px;
          }
          .tabs_section_chat .card-body {
            padding: 0rem;
          }
          .tabs_section_chat .card_profile {
            padding-left: 7px;
            padding-right: 7px;
          }
          .tabs_section_chat .fade.show {
            opacity: 1;
            margin-bottom: 50px;
          }
          @media screen and (max-width: 769px) {
            .tabs_section_chat .cerca {
              padding-left: 0px;
            }
            
            .tabs_section_chat .favoritos {
              padding-right: 0px;
            }
          }
          @media (max-width: 575.98px) {
            .tabs_section_chat_child {
              padding-left: 41px;
            }
          }
          #frame #sidepanel #profile {
            width: 100%;
          }
          #frame #sidepanel #contacts ul li.contact:hover,
          #frame #sidepanel #alerts ul li.contact:hover {
            background: transparent;
          }
          @media (max-width: 768px) {
            .tabs_section_chat_child {
              padding-right: 0px;
            }
            
            #frame #sidepanel #contacts ul li.contact .wrap img,
            #frame #sidepanel #alerts ul li.contact .wrap img {
              width: 41px;
            }
            
            #frame #sidepanel #contacts ul li.contact,
            #frame #sidepanel #alerts ul li.contact {
              list-style: none;
              padding-bottom: 62px;
            }
            
            #frame #sidepanel #contacts ul li.contact.active .wrap img,
            #frame #sidepanel #alerts ul li.contact.active .wrap img {
              margin-left: -3px;
            }
            
            #frame #sidepanel #bottom-bar {
              display: none;
            }
            
            #sidepanel .nav-item a {
              font-size: 10px !important;
            }
            
            #alerts .contact {
              padding-bottom: 0;
              padding-left: 0;
              padding-top: 24px;
            }
            
            #alerts ul li.contact {
              padding-left: 0 !important;
            }
            
            #alerts ul li.contact img {
              margin-left: 5px !important;
            }
          }
          #notificacion {
            display: none;
            text-align: left;
            padding: 77px;
            display: block;
            font-size: 14px;
          }
          .message-input {
            height: 70px;
          }
          .message-input input {
            width: 94% !important;
            height: 40px !important;
            margin-left: 20px;
            margin-right: 20px;
            margin-top: 15px !important;
          }
          .message-input button {
            position: absolute !important;
            left: 89% !important;
            top: 10px !important;
            background: transparent !important;
          }
          @media (max-width: 490px) {
            .years_exp,
            .cost_hour {
              display: none;
            }
            
            .message-input input {
              width: 84% !important;
            }
            
            .message-input button {
              left: 77% !important;
              top: 8px !important;
            }
          }
          .manage_apllicants {
            width: 95%;
            min-width: 360px;
            max-width: 1000px;
            margin: 0 auto;
            margin-bottom: 17px;
            margin-top: 100px;
          }
          .manage_apllicants a {
            text-decoration: none;
          }
          .manage_apllicants svg {
            height: 11px;
          }
          #frame #sidepanel #search {
            padding-right: 0;
            padding-left: 0;
          }
          #frame #sidepanel #search .tabs_section_chat {
            margin-left: 0px;
            margin-right: 0px;
            margin-left: 0px;
          }
          .tabs_section_chat .tabs_section_chat_child {
            padding-left: 0px;
            padding-right: 0px;
          }
          #sidepanel {
            border-left: 1px solid #dedede;
            border-bottom: 1px solid #dedede;
          }
          #alerts .contact {
            padding-bottom: 0;
          }
          #alerts .contact .wrap {
            height: 82px !important;
          }
          #alerts .contact .meta {
            padding: 13px 0 0 0;
          }
          #alerts .contact .meta .pre1 {
            font-weight: 400;
            font-size: 17px;
            margin-top: -5px;
          }
          #alerts .contact .meta .pre2 {
            font-size: 12px;
            margin-top: -39px;
          }
          .contact_pro {
            font-weight: 400;
            font-size: 17px;
            margin-top: 7px;
          }
          .contact_mess {
            margin-top: 0px !important;
            font-size: 12px;
          }
      </style>
        <div class="manage_apllicants">
           <a href="true" data-type="all" aria-labelledby="backButton">
              <span class="icon icon-back-chevron-lg">
                 <svg xmlns="http://www.w3.org/2000/svg" width="11" height="23" viewBox="0 0 11 23">
                    <path fill="none" stroke="currentColor" d="M1.25 11.5L9.943 1.256M1.2563 11.5l8.693 10.244"></path>
                 </svg>
              </span>
              <!-- react-text: 6 --><!-- /react-text --><span id="backButton">Manage Applicants </span>
           </a>
        </div>
        <div id="frame">
           <div id="sidepanel">
              <div id="search">
                 <div class="row tabs_section_chat">
                    <div class="col-12 tabs_section_chat_child">
                       <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item cerca"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="font-size: 16px;font-weight: 600;">Mensajes</a></li>
                          <li class="nav-item vistos"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="font-size: 16px;font-weight: 600;">Alertas</a></li>
                       </ul>
                       <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                             <div id="contacts">
                                <ul>
                                   <li class="contact">
                                      <div class="wrap">
                                         <!-- <span class="contact-status online"></span>--><img src="http://emilcarlsson.se/assets/louislitt.png" alt="" />
                                         <div class="meta">
                                            <p class="name">Louis Litt</p>
                                            <p class="preview contact_pro">Nanny Needed For 1 Child In Hastings</p>
                                            <p class="preview contact_mess">You just got LITT up,
                                               Mike.
                                            </p>
                                         </div>
                                      </div>
                                   </li>
                                   <li class="contact active">
                                      <div class="wrap">
                                         <!-- <span class="contact-status busy"></span>--><img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                         <div class="meta">
                                            <p class="name">Harvey Specter</p>
                                            <p class="preview contact_pro">Nanny Needed For 1 Child In Hastings</p>
                                            <p class="preview contact_mess">Wrong. You take the gun,
                                               or you pull out a bigger one. Or,
                                               you call their bluff. Or,
                                               you do any one of a hundred and forty six other things.
                                            </p>
                                         </div>
                                      </div>
                                   </li>
                                   <li class="contact">
                                      <div class="wrap">
                                         <!-- <span class="contact-status away"></span>--><img src="http://emilcarlsson.se/assets/rachelzane.png" alt="" />
                                         <div class="meta">
                                            <p class="name">Rachel Zane</p>
                                            <p class="preview contact_pro">Nanny Needed For 1 Child In Hastings</p>
                                            <p class="preview contact_mess">I was thinking that we could have chicken tonight,
                                               sounds good?
                                            </p>
                                         </div>
                                      </div>
                                   </li>
                                   <li class="contact">
                                      <div class="wrap">
                                         <!-- <span class="contact-status online"></span>--><img src="http://emilcarlsson.se/assets/donnapaulsen.png" alt="" />
                                         <div class="meta">
                                            <p class="name">Donna Paulsen</p>
                                            <p class="preview contact_pro">Nanny Needed For 1 Child In Hastings</p>
                                            <p class="preview contact_mess">Mike,
                                               I know everything! I'm Donna..
                                            </p>
                                         </div>
                                      </div>
                                   </li>
                                   <li class="contact">
                                      <div class="wrap">
                                         <!-- <span class="contact-status busy"></span>--><img src="http://emilcarlsson.se/assets/jessicapearson.png" alt="" />
                                         <div class="meta">
                                            <p class="name">Jessica Pearson</p>
                                            <p class="preview contact_pro">Nanny Needed For 1 Child In Hastings</p>
                                            <p class="preview contact_mess">Have you finished the draft on the Hinsenburg deal?</p>
                                         </div>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                          </div>
                          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="margin: 0;">
                             <div id="alerts">
                                <ul>
                                   <li class="contact">
                                      <div class="wrap">
                                         <!-- <span class="contact-status away"></span>--><img src="https://png.pngtree.com/png-vector/20190120/ourlarge/pngtree-bell-vector-icon-png-image_470676.jpg" alt="" />
                                         <div class="meta">
                                            <p class="name">Rachel Zane</p>
                                            <p class="preview pre1">Nanny Needed For 1 Child In Hastings</p>
                                            <p class="preview pre2">I was thinking that we could have chicken tonight,
                                               sounds good?
                                            </p>
                                         </div>
                                      </div>
                                   </li>
                                   <li class="contact">
                                      <div class="wrap">
                                         <!-- <span class="contact-status online"></span>--><img src="https://png.pngtree.com/png-vector/20190120/ourlarge/pngtree-bell-vector-icon-png-image_470676.jpg" alt="" />
                                         <div class="meta">
                                            <p class="name">Donna</p>
                                            <p class="preview pre1">Nanny Needed For 1 Child In Hastings</p>
                                            <p class="preview pre2">I was thinking that we could have chicken tonight,
                                               sounds good?
                                            </p>
                                         </div>
                                      </div>
                                   </li>
                                </ul>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div id="bottom-bar">
                 <div class="message-disclaimer " style="display: block;">
                    <p>Care.com doesn't employ or endorse any caregivers. Vetting is your responsibility. </p>
                    <p><a href="/safety-center" aria-label="safety center" target="_blank">More</a>| <a href="/terms-of-use-p1012.html" aria-label="terms and conditions" target="_blank">Terms</a>| <a href="/privacy-policy-p1013.html" aria-label="privacy policy" target="_blank">Privacy</a></p>
                 </div>
              </div>
           </div>
           <div class="content">
              <div class="contact-profile">
                 <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                 <p class="live_chat_name">
                    Harvey Specter 
                    <span style="margin-left: 10px" class="icon icon-stars-sm icon-stars-0-0">
                       <svg xmlns="http://www.w3.org/2000/svg" width="70" height="10" viewBox="0 0 70 10" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <defs>
                             <path id="star-sm" stroke="none" d="M3.4714 2.7416c.1505-.415.1505-.415.1707-.383l.03-.1704.51-1.406C4.353.312 4.627 0 5.042 0c.4237 0 .6966.323.857.8053l.4723 1.4195.2617.7863 1.576.054.747.0255c1.1206.0377 1.4115.9748.5088 1.6403l-.6024.444-.6023.4444-.6652.491.0665.231c.0986.3426.1176.4086.153.5686l.424 1.4347c.192.669.004 1.2735-.666 1.2735-.2406 0-.4845-.1025-.7373-.2836l-1.89-1.353-1.925 1.301c-.25.1694-.489.2646-.7227.2646-.683 0-.8667-.6175-.6546-1.29l.2266-.7142.2263-.714.2502-.7892-.1898-.148c-.229-.1783-.3075-.2394-.2798-.256h-.049L1.6914 5.53.512 4.61c-.884-.6893-.5677-1.618.553-1.6255l.7474-.0053 1.5767-.0117.082-.2262z"></path>
                             <linearGradient id="fill" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="50%" stop-color="#FB4C4C" stop-opacity="1"></stop>
                                <stop offset="50%" stop-color="#BCBCBC" stop-opacity="1"></stop>
                             </linearGradient>
                          </defs>
                          <use class="star star-1" xlink:href="#star-sm"></use>
                          <use class="star star-2" xlink:href="#star-sm" transform="translate(15)"></use>
                          <use class="star star-3" xlink:href="#star-sm" transform="translate(30)"></use>
                          <use class="star star-4" xlink:href="#star-sm" transform="translate(45)"></use>
                          <use class="star star-5" xlink:href="#star-sm" transform="translate(60)"></use>
                       </svg>
                    </span>
                 </p>
                 <br>
                 <p class="profile-info-line2">
                 <p class="profile-info-line2" class="h7">
                    <span>Juniata,
                    NE</span>
                    <span>
                       <span class="icon">
                          <svg height="14" width="18">
                             <circle cx="9" cy="6" r="3"></circle>
                          </svg>
                       </span>
                       <!-- react-text: 376 -->19yrs old<!-- /react-text -->
                    </span>
                    <span class="icon years_exp">
                       <svg height="14" width="18">
                          <circle cx="9" cy="6" r="3"></circle>
                       </svg>
                    </span>
                    <span class="years_exp">
                       <!-- react-text: 381 -->6<!-- /react-text --><!-- react-text: 382 -->yrs exp<!-- /react-text -->
                    </span>
                    <span class="icon cost_hour">
                       <svg height="14" width="18">
                          <circle cx="9" cy="6" r="3"></circle>
                       </svg>
                    </span>
                    <span class="cost_hour">
                       <!-- react-text: 387 -->$<!-- /react-text --><!-- react-text: 388 -->10<!-- /react-text --><!-- react-text: 389 -->-<!-- /react-text --><!-- react-text: 390 -->15<!-- /react-text --><!-- react-text: 391 -->/hr<!-- /react-text -->
                    </span>
                 </p>
                 </p>
              </div>
              <div class="messages">
                 <ul>
                    <li class="sent">
                       <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                       <p>How the hell am I supposed to get a jury to believe you when I am not even sure that I do?!</p>
                    </li>
                    <li class="replies">
                       <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                       <p>When you're backed against the wall, break the god damn thing down.</p>
                    </li>
                    <li class="replies">
                       <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                       <p>Excuses don't win championships.</p>
                    </li>
                    <li class="sent">
                       <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                       <p>Oh yeah,
                          did Michael Jordan tell you that?
                       </p>
                    </li>
                    <li class="replies">
                       <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                       <p>No,
                          I told him that.
                       </p>
                    </li>
                    <li class="replies">
                       <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                       <p>What are your choices when someone puts a gun to your head?</p>
                    </li>
                    <li class="sent">
                       <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                       <p>What are you talking about? You do what they say or they shoot you.</p>
                    </li>
                    <li class="replies">
                       <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                       <p>Wrong. You take the gun,
                          or you pull out a bigger one. Or,
                          you call their bluff. Or,
                          you do any one of a hundred and forty six other things.
                       </p>
                    </li>
                 </ul>
              </div>
              <div id="notificacion">
                 <div>
                    <div class="message message-type-alert">
                       <div class="when-received body-4">March 30,
                          06:59 AM
                       </div>
                       <div class="alert-app-error-message text-danger" hidden="">Delete option is not available right now. Please try again later.</div>
                       <div class="message-inner message-inner-alerts">
                          <div class="message-text message-text-alerts body-2">
                             We're sorry - the family details you provided do not follow our guidelines for approval and are not currently active.<br><br>
                             <ol>
                                <li>PLEASE DO NOT WRITE IN ALL CAPITAL LETTERS! It can come across as being yelled at.</li>
                                <li>Your account is intended for your household only - please don't share your account with neighbors, extended family, etc.</li>
                             </ol>
                             <br><br>Please <a href="http://www.care.com/my-account-profile-p1040.html">click here</a>to update your family information. Once you make your changes,
                             our team will get to work reviewing your submission for approval. 
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="message-input">
                 <div class="wrap">
                    <input type="text" placeholder="Escribe tu mensaje" /><!-- <i class="fa fa-paperclip attachment" aria-hidden="true"></i>--><button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                 </div>
              </div>
           </div>
        </div>
      <script >


        $(".messages").animate({ scrollTop: $(document).height() }, "fast");
         $("#profile-img").click(function() {
           $("#status-options").toggleClass("active");
         });
         
         $(".expand-button").click(function() {
           $("#profile").toggleClass("expanded");
           $("#contacts").toggleClass("expanded");
           $("#alerts").toggleClass("expanded");
         });
         
         $("#status-options ul li").click(function() {
           $("#profile-img").removeClass();
           $("#status-online").removeClass("active");
           $("#status-away").removeClass("active");
           $("#status-busy").removeClass("active");
           $("#status-offline").removeClass("active");
           $(this).addClass("active");
           
           if($("#status-online").hasClass("active")) {
             $("#profile-img").addClass("online");
           } else if ($("#status-away").hasClass("active")) {
             $("#profile-img").addClass("away");
           } else if ($("#status-busy").hasClass("active")) {
             $("#profile-img").addClass("busy");
           } else if ($("#status-offline").hasClass("active")) {
             $("#profile-img").addClass("offline");
           } else {
             $("#profile-img").removeClass();
           };
           
           $("#status-options").removeClass("active");
         });
         
         function newMessage() {
           message = $(".message-input input").val();
           if($.trim(message) == '') {
             return false;
           }
           $('<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
           $('.message-input input').val(null);
           $('.contact.active .preview').html('<span>You: </span>' + message);
           $(".messages").animate({ scrollTop: $(document).height() }, "fast");

         };
         
         $('.submit').click(function() {
           newMessage();
         });
         
         $(window).on('keydown', function(e) {
           if (e.which == 13) {
             newMessage();
             return false;
           }
         });
         //# sourceURL=pen.js
         
         $("#contacts .contact").click(function(){
          $(".contact.active").removeClass("active");
            $(this).addClass("active");
            $(".content .contact-profile img").attr("src", $(".contact.active img").attr("src"));
            $(".content .messages .replies img").map(function(){
              $(this).attr("src", $(".contact.active img").attr("src"));
            })
            $(".content .messages li p").map(function(){
              $(this).text(MakeRamdomText(30));
            })

            $("#notificacion").fadeOut(200, function(){
              $(".contact-profile, .messages").fadeIn(200);
            });
            $(".message-input .wrap").show(200);
         })
         
         
         $("#alerts .contact").click(function(){
          $("#alerts .contact.active").removeClass("active");
            $(this).addClass("active");
            $(".contact-profile, .messages").fadeOut(200, function(){
              $("#notificacion").fadeIn(200);
            });
            $(".message-input .wrap").hide(200);
         })
         
         function MakeRamdomText(length) {
             var result           = '';
             var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
             var charactersLength = characters.length;
             for ( var i = 0; i < length; i++ ) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
             }
             return result;
          }
      </script>
      <!-- <div class="espacio"></div> -->
      <div class="espacio3"></div>
      <div class="footer white">
      <?php  require_once("avs_footer.php"); ?>