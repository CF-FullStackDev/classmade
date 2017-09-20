<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chat Trash</title>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<style>
        @font-face {
            font-family: 'Oxygen', sans-serif;
            src: url('http://fonts.googleapis.com/css?family=Oxygen:400,300,700');
        }
    	html,body {
    		margin: 0px;
            font-family: 'Oxygen', sans-serif;
			color: #043241;
    	}

        .sidebar {
            background-color:#e9ebee;position:fixed;top:100;right:0;height:100%;width:200px;border-left:1px solid #cccccc;padding-top:10px;
        }

		#hide::-webkit-scrollbar {
		    display:none;
		}
	</style>
</head>
<body>
    <div style="">

        <div style="">

        </div>

        <div class="sidebar">

            <div style="padding-left:10px;padding-right:10px;">
                <span style="font-size:14px;font-weight:bold;color:#4c4c4c;display:block;padding-bottom:10px;">Group Project</span>

                <div style="height:45px;width:100%;position:relative;margin-bottom:10px;cursor:pointer;">
                    <div style="display:inline-block;height:40px;width:40px;">
                        <img src="{{asset('storage/avatar/2-592e4beb2a3b3.png')}}" width="20" height="40" style="position:absolute;left:0;top:0;object-fit:cover;">
                        <img src="{{asset('storage/avatar/17-592fc41655b61.png')}}" width="20" height="20" style="position:absolute;left:20px;top:0;object-fit:cover;">
                        <img src="{{asset('storage/avatar/15-5947a52aabd61.png')}}" width="20" height="20" style="position:absolute;left:20px;top:20px;object-fit:cover;">
                    </div>
                    <div style="display:inline-block;vertical-align:top;padding-top:3px;padding-left:5px;">
                        <span style="font-size:13px;display:block;">Project One</span>
                        <span style="font-size:11px;line-height:20px;display:block;">Cristian, Mikee, Dummy</span>
                    </div>
                </div>

            </div>

            <div style="padding-left:10px;padding-right:10px;">
                <span style="font-size:14px;font-weight:bold;color:#4c4c4c;display:block;padding-bottom:10px;">Contacts</span>

                <div style="height:45px;width:100%;position:relative;margin-bottom:10px;cursor:pointer;">
                    <img src="{{asset('storage/avatar/2-592e4beb2a3b3.png')}}" width="40" height="40" style="display:inline-block">
                    <div style="display:inline-block;vertical-align:top;padding-top:8px;padding-left:5px;">
                        <span style="font-size:12px;">Cristian Fundanera</span>
                    </div>
                    <div style="background-color:#4aba34;width:7px;height:7px;border-radius:50%;position:absolute;top:17px;right:0;margin-right:5px;"></div>
                </div>

                <div style="height:45px;width:100%;position:relative;margin-bottom:10px;cursor:pointer;">
                    <img src="{{asset('storage/avatar/13-592e7edd98bf6.png')}}" width="40" height="40" style="display:inline-block">
                    <div style="display:inline-block;vertical-align:top;padding-top:8px;padding-left:5px;">
                        <span style="font-size:12px;">Kit Lo</span>
                    </div>
                    <div style="background-color:#4aba34;width:7px;height:7px;border-radius:50%;position:absolute;top:17px;right:0;margin-right:5px;"></div>
                </div>
            </div>

            <div style="position:fixed;bottom:0;width:100%;height:23px;background-color:#ffffff;padding-left:5px;padding-top:7px;">
                <img src="{{asset('img/search.png')}}" width="20" height="20" style="display:inline-block;margin-top:-1px;">
                <input type="text" name="" placeholder="Search" style="outline:0;border:0;display:inline-block;vertical-align:top;">
            </div>

        </div>

        <div style="position:fixed;bottom:0;right:210px;width:260px;height:330px;background-color:#ffffff;border:1px solid #cfd0d3;border-top-right-radius:5px;border-top-left-radius:5px;overflow:hidden">
            <div style="background-color:#4080ff;font-size:12px;color:#ffffff;font-weight:bold;padding:8px;">
                Cristian Fundanera
                <div style="float:right;margin-top:-1px;cursor:pointer;">x</div>
            </div>
            <div style="height:245px;padding:7px;overflow-y: auto;overflow-x: hidden;">

                <div style="margin-bottom:10px;">
                    <img src="{{asset('storage/avatar/13-592e7edd98bf6.png')}}" width="35" height="35" style="display:inline-block;">
                    <div style="font-size:11px;display:inline-block;vertical-align:top;max-width:170px;background-color:#f1f0f0;padding:10px;border-radius:5px;">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </div>
                </div>

                <div style="margin-bottom:10px;text-align:right;">
                    <div style="font-size:11px;display:inline-block;vertical-align:top;max-width:170px;background-color:#4080ff;padding:10px;border-radius:5px;color:#ffffff;">
                        Lorem Ipsum is simply dummy...
                    </div>
                    <img src="{{asset('storage/avatar/2-592e4beb2a3b3.png')}}" width="35" height="35" style="display:inline-block;">
                </div>

				<div style="margin-bottom:10px;text-align:right;">
                    <div style="font-size:11px;display:inline-block;vertical-align:top;max-width:170px;background-color:#4080ff;padding:10px;border-radius:5px;color:#ffffff;">
                        Lorem Ipsum is simply dummy...
                    </div>
                    <img src="{{asset('storage/avatar/2-592e4beb2a3b3.png')}}" width="35" height="35" style="display:inline-block;">
                </div>

				<div style="margin-bottom:10px;text-align:right;">
                    <div style="font-size:11px;display:inline-block;vertical-align:top;max-width:170px;background-color:#4080ff;padding:10px;border-radius:5px;color:#ffffff;">
                        Lorem Ipsum is simply dummy...
                    </div>
                    <img src="{{asset('storage/avatar/2-592e4beb2a3b3.png')}}" width="35" height="35" style="display:inline-block;">
                </div>

				<div style="margin-bottom:10px;text-align:right;">
                    <div style="font-size:11px;display:inline-block;vertical-align:top;max-width:170px;background-color:#4080ff;padding:10px;border-radius:5px;color:#ffffff;">
                        Lorem Ipsum is simply dummy...
                    </div>
                    <img src="{{asset('storage/avatar/2-592e4beb2a3b3.png')}}" width="35" height="35" style="display:inline-block;">
                </div>

				<div style="margin-bottom:10px;text-align:right;">
                    <div style="font-size:11px;display:inline-block;vertical-align:top;max-width:170px;background-color:#4080ff;padding:10px;border-radius:5px;color:#ffffff;">
                        Lorem Ipsum is simply dummy...
                    </div>
                    <img src="{{asset('storage/avatar/2-592e4beb2a3b3.png')}}" width="35" height="35" style="display:inline-block;">
                </div>

            </div>
            <div style="border-top:1px solid #e5e5e5;height:30px;padding:3px;">
                <textarea name="name" placeholder="Type a message" style="border:none;height:30px;width:100%;font-size:12px;font-family: 'Oxygen', sans-serif;outline:0;resize:none;"></textarea>
            </div>
        </div>

    </div>
</body>
</html>
