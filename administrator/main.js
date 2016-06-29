$(function(){
    var canvas = $("#that").get(0);
    var rpil,gpil,bpil,btsR,btsG,btsG;
    rpil = 0; gpil = 0; bpil = 0;
    btsR = 144; btsG = 145; btsB = 131;
    var xget, yget, cCo, iData, sr, sg, sb;
    //Code Based on http://www.javascripter.net/faq/hextorgb.htm
    function hexToR(h) {return parseInt((cutHex(h)).substring(0,2),16)}
    function hexToG(h) {return parseInt((cutHex(h)).substring(2,4),16)}
    function hexToB(h) {return parseInt((cutHex(h)).substring(4,6),16)}
    function cutHex(h) {return (h.charAt(0)=="#") ? h.substring(1,7):h}
    //Code Based on http://www.javascripter.net/faq/hextorgb.htm
    
    $(".gambar").load(function(){
        var gambar = $(".gambar").get(0);
        var cContext = canvas.getContext("2d");
        // canvas.width = gambar.width;
        // canvas.height = gambar.height;
        cContext.drawImage(gambar,0,0,gambar.width, gambar.height);
        cCo = canvas.getContext("2d");
    });
    
    function pick(r,g,b){
        rpil = r;
        gpil = g;
        bpil = b;
    };
    
    $(".colorr").click(function (e) { 
        pick($(this).attr("r"),$(this).attr("g"),$(this).attr("b"));
    });

    $(".clear").click(function(){
        var gambar = $(".gambar").get(0);
        var cContext = canvas.getContext("2d");
        // canvas.width = gambar.width;
        // canvas.height = gambar.height;
        cContext.drawImage(gambar,0,0,gambar.width, gambar.height);
    });
    
    $("#that").click(function(event){
        var posX = event.offsetX;
        var posY = event.offsetY;
        getPickColor(posX,posY);
    });
    
    $(".gambarpil").click(function(){
        console.log($(this).attr("src"));
        $(".gambar").attr("src",$(this).attr("src"));
    });

    /* A Code from http://www.williammalone.com/articles/html5-canvas-javascript-paint-bucket-tool/
        Since my code works well but this's suck that JS doesn't support recursion too much because of this
        Reffering to this.. http://programmers.stackexchange.com/questions/179863/performance-recursion-vs-iteration-in-javascript
        JS doesn't support tail recursion optimazation
    */
    
    function matchStartColor(pixelPos)
    {
      var r = iData.data[pixelPos];	
      var g = iData.data[pixelPos+1];	
      var b = iData.data[pixelPos+2];

      return (r == sr && g == sg && b == sb);
    }

    function colorPixel(pixelPos)
    {
      iData.data[pixelPos] = rpil;
      iData.data[pixelPos+1] = gpil;
      iData.data[pixelPos+2] = bpil;
    }
    
    function wmBucket(startX,startY){
        pixelStack = [[startX, startY]];
        while(pixelStack.length)
        {
            var newPos, x, y, pixelPos, reachLeft, reachRight;
            newPos = pixelStack.pop();
            x = newPos[0];
            y = newPos[1];

            pixelPos = (y*canvas.width + x) * 4;
            while(y-- >= 0 && matchStartColor(pixelPos))
            {
                pixelPos -= canvas.width * 4;
            }
            pixelPos += canvas.width * 4;
            ++y;
            reachLeft = false; // Kanan
            reachRight = false; // Kiri
            while(y++ < canvas.height-1 && matchStartColor(pixelPos))
            {
                colorPixel(pixelPos);

                if(x > 0)
                {
                    if(matchStartColor(pixelPos - 4))
                    {
                        if(!reachLeft){
                            pixelStack.push([x - 1, y]);
                            reachLeft = true;
                        }
                    }
                    else if(reachLeft)
                    {
                        reachLeft = false;
                    }
                }

                if(x < canvas.width-1)
                {
                    if(matchStartColor(pixelPos + 4))
                    {
                        if(!reachRight)
                        {
                            pixelStack.push([x + 1, y]);
                            reachRight = true;
                        }
                    }
                    else if(reachRight)
                    {
                        reachRight = false;
                    }
                }
                pixelPos += canvas.width * 4;
            }
        }
        cCo.putImageData(iData, 0, 0);
    }

    /*
        end of William Malone Code. Licensed with MIT Licensed.
        I still consider to port my recursion to iteration in meanwhile
    */

    function getPickColor(startX,startY){
        iData = cCo.getImageData(startX,startY,1,1);
        //Cek apakah hitam tidak di awal, mengurangi percabangan
        if (
            (iData.data[0] != btsR || iData.data[1] != btsG || iData.data[2] != btsB) && //apakah adalah garis
            (iData.data[0] != rpil || iData.data[1] != gpil || iData.data[2] != bpil)//untuk mengecek apakah sama warnanya
        ){
            sr = iData.data[0]; sg = iData.data[1]; sb = iData.data[2];
            iData = cCo.getImageData(0,0,canvas.width, canvas.height);
            wmBucket(startX,startY);
        }
        else{
            console.log("Warna Garis sama atau terisi warna yang sama - Menghindari Overload pada Browser memory, menyebabkan crash");
        }
    }

    /*
        Created by Ken Fyrstenberg Nilsen / Epistemex.com
        License: CC3.0-Attr.
    */
    function drawTrapezoid(ctx, img, x, y, w, h, factor) {
        var startPoint = x + w * 0.5 * (factor*0.01),
            xi, yi, scale = img.height / h,
            startLine = y,
            endLine = y + h;

        for(; y < endLine; y++) {
            
            xi = interpolate(startPoint, x, (y - startLine) / h);
            yi = (y * scale + 0.5)|0;
            ctx.drawImage(img, 0, yi, img.width, 1, xi, y, w - xi * 2, 1);
        }
        
        function interpolate(x1, x2, t) {
            return x1 + (x2 - x1) * t;
        }
    }
    /*
        Start With the Simulation of Room
        16 May 2016
    */
    
    function showhasil(URI){
        var img = $("<img>").attr("src",URI);
        var div1 = $("<div></div>").addClass("hasilsim");
        var close = $("<a >").attr("href","#").text("close").addClass("btn btn-default");
        var div2 = $("<div></div>").append(close);
        $(close).click(function (e) { 
            $(".hasilsim").remove();
        });
        div2.append(img);
        div1.append(div2);
        $("body").append(div1);
    }
    var rotasiSebelum=0;
    //Rotate Keramik biar 4 bagian jadi 1
    function empatJdSatu(posisi){
        var deg;
        switch(posisi){
            case 1:
                deg=0;
                break;
            case 2:
                deg=-90;
                break;
            case 3:
                deg=90;
                break;
            case 4:
                deg=180;
                break;
        }
        var gambar = canvas;
        var rotate = $("#rotate").get(0);
        var rctx = rotate.getContext("2d");
        rctx.clearRect(0,0,230,230);// Bersihkan Canvas
        rctx.save();
        rctx.translate(rotate.width/2,rotate.height/2);
        rctx.rotate(deg*Math.PI/180);
        rctx.drawImage(gambar,-gambar.width/2,-gambar.width/2);
        rctx.restore();
    }
    //Gambarkan ke canvas 4 bagian jadi 1
    function gambar4(tempctx,w,h){
        var gambar = $("#rotate").get(0);
        for(var i = 1; i<=20; i++){//Untuk Kolom
            for(var j = 1; j<=20; j++){//Baris
                /*
                -----|-----
                  1  |  2
                -----|-----
                  3  |  4
                -----|-----

                */
                if(i%2 != 0 && j%2 != 0){
                    //1
                    empatJdSatu(1);
                }
                else if(i%2 != 0 && j%2 == 0){
                    //2
                    empatJdSatu(2);
                }
                else if(i%2 == 0 && j%2 != 0){
                    //3
                    empatJdSatu(3);
                }
                else if(i%2 == 0 && j%2 == 0){
                    //4
                    empatJdSatu(4);
                }
                tempctx.drawImage(gambar,((i-1)*w),((j-1)*h),w,h);
            }   
        }
    }

    //Living Room 1
    $("#r1").click(function (e) { 
        var ruangan = $(this).get(0);//Dapatkan Gambar yang di click
        var temp = $("#temp").get(0);//Dapatkan Gambar dari #temp
        var tempctx = temp.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        tempctx.clearRect(0,0,temp.width,temp.height);
        //Gambarkan canvas seperti kotak koordinat
        /*for(var i = 1; i<=20; i++){//Untuk Kolom
            for(var j = 1; j<=20; j++){//Baris
                tempctx.drawImage(canvas,((i-1)*50),((j-1)*55),50,55);
            }   
        }*/
        //For test
        gambar4(tempctx,50,55);
        //For test
        var trap = $("#trap").get(0);//Dapatkan gambar dari Trap, Tempat Raplika, Replika, Trapresium
        var trapctx = trap.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        trapctx.clearRect(0,0,trap.width,trap.height);
        trapctx.setTransform(1,0,0,1,0,0);
        drawTrapezoid(trapctx,temp,0,0,800,500,77);//Disimulasikan 1 titik hilang
        var hsim = $("#hsim").get(0);//Dapatkan Canvas Hasil Simulasi
        var hctx = hsim.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        hctx.clearRect(0,0,hsim.width,hsim.height);//Bersihkan Canvas
        hctx.drawImage(trap,-110,300,1050,200);
        hctx.drawImage(ruangan,0,0,800,500);
        var data = hsim.toDataURL();
        showhasil(data);
    });

    //Living Room 2
    $("#r2").click(function (e) { 
        var ruangan = $(this).get(0);//Dapatkan Gambar yang di click
        var temp = $("#temp").get(0);//Dapatkan Gambar dari #temp
        var tempctx = temp.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        tempctx.clearRect(0,0,temp.width,temp.height);
        //Gambarkan canvas seperti kotak koordinat
        // for(var i = 1; i<=20; i++){//Untuk Kolom
        //     for(var j = 1; j<=20; j++){//Baris
        //         tempctx.drawImage(canvas,((i-1)*40),((j-1)*45),40,45);
        //     }   
        // }
        gambar4(tempctx,40,45);
        var trap = $("#trap").get(0);//Dapatkan gambar dari Trap, Tempat Raplika, Replika, Trapresium
        var trapctx = trap.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        trapctx.clearRect(0,0,trap.width,trap.height);
        trapctx.setTransform(1,0,0,1,0,0);
        drawTrapezoid(trapctx,temp,0,0,800,500,77);//Disimulasikan 1 titik hilang
        var hsim = $("#hsim").get(0);//Dapatkan Canvas Hasil Simulasi
        var hctx = hsim.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        hctx.clearRect(0,0,hsim.width,hsim.height);//Bersihkan Canvas
        hctx.drawImage(trap,-300,319,1450,180);
        hctx.drawImage(ruangan,0,0,800,500);
        var data = hsim.toDataURL();
        showhasil(data);
    });

    // Kamar Mandi 
    $("#r3").click(function (e) { 
         var ruangan = $(this).get(0);//Dapatkan Gambar yang di click
        var temp = $("#temp").get(0);//Dapatkan Gambar dari #temp
        var tempctx = temp.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        tempctx.clearRect(0,0,temp.width,temp.height);
        //Gambarkan canvas seperti kotak koordinat
        // for(var i = 1; i<=20; i++){//Untuk Kolom
        //     for(var j = 1; j<=20; j++){//Baris
        //         tempctx.drawImage(canvas,((i-1)*50),((j-1)*50),50,50);
        //     }   
        // }
        gambar4(tempctx,50,50);
        var trap = $("#trap").get(0);//Dapatkan gambar dari Trap, Tempat Raplika, Replika, Trapresium
        var trapctx = trap.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        trapctx.clearRect(0,0,trap.width,trap.height);
        trapctx.setTransform(1,0,0,1,0,0);
        drawTrapezoid(trapctx,temp,0,0,800,500,70);//Disimulasikan 1 titik hilang
        var hsim = $("#hsim").get(0);//Dapatkan Canvas Hasil Simulasi
        var hctx = hsim.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        hctx.clearRect(0,0,hsim.width,hsim.height);//Bersihkan Canvas
        hctx.drawImage(trap,-150,300,1100,280);
        hctx.drawImage(ruangan,0,0,800,500);
        var data = hsim.toDataURL();
        showhasil(data);
    });

    //Ruang Makan
    $("#r4").click(function (e) { 
        var ruangan = $(this).get(0);//Dapatkan Gambar yang di click
        var temp = $("#temp").get(0);//Dapatkan Gambar dari #temp
        var tempctx = temp.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        tempctx.clearRect(0,0,temp.width,temp.height);
        //Gambarkan canvas seperti kotak koordinat
        // for(var i = 1; i<=20; i++){//Untuk Kolom
        //     for(var j = 1; j<=20; j++){//Baris
        //         tempctx.drawImage(canvas,((i-1)*50),((j-1)*50),50,50);
        //     }   
        // }
        gambar4(tempctx,50,50);
        var trap = $("#trap").get(0);//Dapatkan gambar dari Trap, Tempat Raplika, Replika, Trapresium
        var trapctx = trap.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        trapctx.clearRect(0,0,trap.width,trap.height);
        trapctx.setTransform(1,0,0,1,0,0);
        drawTrapezoid(trapctx,temp,0,0,800,500,72);//Disimulasikan 1 titik hilang
        var hsim = $("#hsim").get(0);//Dapatkan Canvas Hasil Simulasi
        var hctx = hsim.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        hctx.clearRect(0,0,hsim.width,hsim.height);//Bersihkan Canvas
        hctx.drawImage(trap,-200,300,1370,260);
        hctx.drawImage(ruangan,0,0,800,500);
        var data = hsim.toDataURL();
        showhasil(data);
    });

    //Kamar Tidur
    $("#r5").click(function (e) { 
        var ruangan = $(this).get(0);//Dapatkan Gambar yang di click
        var temp = $("#temp").get(0);//Dapatkan Gambar dari #temp
        var tempctx = temp.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        tempctx.clearRect(0,0,temp.width,temp.height);
        //Gambarkan canvas seperti kotak koordinat
        // for(var i = 1; i<=20; i++){//Untuk Kolom
        //     for(var j = 1; j<=20; j++){//Baris
        //         tempctx.drawImage(canvas,((i-1)*60),((j-1)*68),60,68);
        //     }   
        // }
        gambar4(tempctx,60,68);
        var trap = $("#trap").get(0);//Dapatkan gambar dari Trap, Tempat Raplika, Replika, Trapresium
        var trapctx = trap.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        trapctx.clearRect(0,0,trap.width,trap.height);
        trapctx.setTransform(1,0,0,1,0,0);
        drawTrapezoid(trapctx,temp,0,0,800,500,62);//Disimulasikan 1 titik hilang
        var hsim = $("#hsim").get(0);//Dapatkan Canvas Hasil Simulasi
        var hctx = hsim.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        hctx.clearRect(0,0,hsim.width,hsim.height);//Bersihkan Canvas
        hctx.drawImage(trap,-285,340,1480,182);
        hctx.drawImage(ruangan,0,0,800,500);
        var data = hsim.toDataURL();
        showhasil(data);
    });

    //Entrence Masuk
    $("#r6").click(function (e) { 
         var ruangan = $(this).get(0);//Dapatkan Gambar yang di click
        var temp = $("#temp").get(0);//Dapatkan Gambar dari #temp
        var tempctx = temp.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        tempctx.clearRect(0,0,temp.width,temp.height);
        //Gambarkan canvas seperti kotak koordinat
        // for(var i = 1; i<=20; i++){//Untuk Kolom
        //     for(var j = 1; j<=20; j++){//Baris
        //         tempctx.drawImage(canvas,((i-1)*60),((j-1)*68),60,68);
        //     }   
        // }
        gambar4(tempctx,60,68);
        var trap = $("#trap").get(0);//Dapatkan gambar dari Trap, Tempat Raplika, Replika, Trapresium
        var trapctx = trap.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        trapctx.clearRect(0,0,trap.width,trap.height);
        trapctx.setTransform(1,0,0,1,0,0);
        drawTrapezoid(trapctx,temp,0,0,800,500,85);//Disimulasikan 1 titik hilang
        var hsim = $("#hsim").get(0);//Dapatkan Canvas Hasil Simulasi
        var hctx = hsim.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        hctx.clearRect(0,0,hsim.width,hsim.height);//Bersihkan Canvas
        hctx.drawImage(trap,-300,310,1480,190);
        hctx.drawImage(ruangan,0,0,800,500);
        var data = hsim.toDataURL();
        showhasil(data);
    });

    //Ruang Kerja
    $("#r7").click(function (e) { 
        var ruangan = $(this).get(0);//Dapatkan Gambar yang di click
        var temp = $("#temp").get(0);//Dapatkan Gambar dari #temp
        var tempctx = temp.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        tempctx.clearRect(0,0,temp.width,temp.height);
        //Gambarkan canvas seperti kotak koordinat
        // for(var i = 1; i<=20; i++){//Untuk Kolom
        //     for(var j = 1; j<=20; j++){//Baris
        //         tempctx.drawImage(canvas,((i-1)*50),((j-1)*55),50,55);
        //     }   
        // }
        gambar4(tempctx,50,55);
        var trap = $("#trap").get(0);//Dapatkan gambar dari Trap, Tempat Raplika, Replika, Trapresium
        var trapctx = trap.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        trapctx.clearRect(0,0,trap.width,trap.height);
        trapctx.setTransform(1,0,0,1,0,0);
        drawTrapezoid(trapctx,temp,0,0,800,500,65);//Disimulasikan 1 titik hilang
        var hsim = $("#hsim").get(0);//Dapatkan Canvas Hasil Simulasi
        var hctx = hsim.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        hctx.clearRect(0,0,hsim.width,hsim.height);//Bersihkan Canvas
        hctx.drawImage(trap,-450,340,1710,180);
        hctx.drawImage(ruangan,0,0,800,500);
        var data = hsim.toDataURL();
        showhasil(data);
    });

    //Dapur
    $("#r8").click(function (e) { 
        var ruangan = $(this).get(0);//Dapatkan Gambar yang di click
        var temp = $("#temp").get(0);//Dapatkan Gambar dari #temp
        var tempctx = temp.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        tempctx.clearRect(0,0,temp.width,temp.height);
        //Gambarkan canvas seperti kotak koordinat
        // for(var i = 1; i<=20; i++){//Untuk Kolom
        //     for(var j = 1; j<=20; j++){//Baris
        //         tempctx.drawImage(canvas,((i-1)*50),((j-1)*55),50,55);
        //     }   
        // }
        gambar4(tempctx,50,55);
        var trap = $("#trap").get(0);//Dapatkan gambar dari Trap, Tempat Raplika, Replika, Trapresium
        var trapctx = trap.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        trapctx.clearRect(0,0,trap.width,trap.height);
        trapctx.setTransform(1,0,0,1,0,0);
        trapctx.transform(1,-0.1,0.11,1,0,0);
        drawTrapezoid(trapctx,temp,0,0,800,500,84);//Disimulasikan 1 titik hilang
        var hsim = $("#hsim").get(0);//Dapatkan Canvas Hasil Simulasi
        var hctx = hsim.getContext("2d");//Convert ke array 1-d jadi 2 dimensi
        hctx.clearRect(0,0,hsim.width,hsim.height);//Bersihkan Canvas
        hctx.drawImage(trap,-300,310,1430,220);
        hctx.drawImage(ruangan,0,0,800,500);
        var data = hsim.toDataURL();
        showhasil(data);
    });
});