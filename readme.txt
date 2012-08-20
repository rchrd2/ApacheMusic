      ___           ___                         ___           ___           ___     
     /  /\         /  /\          ___          /  /\         /  /\         /  /\    
    /  /::|       /  /:/         /  /\        /  /::\       /  /::\       /  /:/    
   /  /:|:|      /  /:/         /  /::\      /  /:/\:\     /  /:/\:\     /  /:/     
  /  /:/|:|__   /  /:/         /  /:/\:\    /  /::\ \:\   /  /:/  \:\   /  /::\ ___ 
 /__/:/_|::::\ /__/:/     /\  /  /::\ \:\  /__/:/\:\_\:\ /__/:/ \  \:\ /__/:/\:\  /\
 \__\/  /~~/:/ \  \:\    /:/ /__/:/\:\_\:\ \__\/  \:\/:/ \  \:\  \__\/ \__\/  \:\/:/
       /  /:/   \  \:\  /:/  \__\/  \:\/:/      \__\::/   \  \:\            \__\::/ 
      /  /:/     \  \:\/:/        \  \::/       /  /:/     \  \:\           /  /:/  
     /__/:/       \  \::/          \__\/       /__/:/       \  \:\         /__/:/   
     \__\/         \__\/                       \__\/         \__\/         \__\/    

,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,

Mupach (Music Apache) is a framework for serving music using apache mod_autoindex

See example: http://dev.rchrd.net/example/mupach/

Screenshot before install: 
  http://dev.rchrd.net/example/mupach/_mupach/mupach-before.png
Screenshot after install: 
  http://dev.rchrd.net/example/mupach/_mupach/mupach-after.png

,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,

GETTING STARTED:

-> Copy the contents of public onto your apache web server.
-> Edit the .htaccess to have the correct paths
     - Search for "/mupach/source/public/" and change that to the path to your 
     Mupach root.
-> Follow the example content structure to add your own music
     - Mupach expects two files in each directory: Album-Art.jpg, and liner.txt
     - Mupach uses mod_autoindex to list the music files, and the Yahoo Web 
     Player parses these to generate a media player.


,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,

RELEASE NOTES 

08/19/12 -- Pushed to Github®


,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,

AUTHOR:

Richard Caceres <me@rchrd.net>
http://github.com/rcaceres/
http://rchrd.net

Note: Ascii art generated at http://patorjk.com/software/taag/


,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,

OPEN SOURCE MIT LICENSE:

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
