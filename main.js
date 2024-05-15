const mini_player_btn =  document.getElementById('music_player');
const mini_player = document.querySelector('.mini_player');
let active =document.getElementById('active');
 mini_player_btn.onclick = () => {
    mini_player.classList.toggle('active');
}
let main = 0;
let player_btn = document.getElementById("player_btn");
let audio= new Audio();
let card_btn = Array.from(document.querySelectorAll('.card_content button'));
let sing = document.querySelector('.container h3');
let song = document.querySelector('.container h1');
let bgimg = document.getElementById('img');
let vol = document.getElementById('volume');
let img_container = document.getElementById('home');
let main_duration = document.getElementById('main_duration');
let player_duration = document.getElementById('play');
let timeline_duration = document.getElementById('timeline_duration');
let ful_time = document.querySelector('#ful_time');
let music_btn = document.getElementById("music_btn");
let mini_player_bg = document.querySelector('.mini_player'); 
let next_btn =  document.getElementById('nxt');
let prev_btn = document.getElementById('prev');


player_btn.addEventListener('click',() => {   
    if(audio.paused){
        audio.play();
        player_btn.classList.remove("bx-play-circle");
        player_btn.classList.add("bx-pause-circle");
    }else{
        audio.pause();
        player_btn.classList.add("bx-play-circle");
        player_btn.classList.remove("bx-pause-circle");

    }

})
music_btn.addEventListener('click',() => {   
    if(audio.paused){
        audio.play();
        music_btn.classList.remove("bx-play-circle");
        music_btn.classList.add("bx-pause-circle");
    }else{
        audio.pause();
        music_btn.classList.add("bx-play-circle");
        music_btn.classList.remove("bx-pause-circle");

    }
    
})

async function fetxh(){
    let a = await fetch("http://localhost/music/fatch.php");
    let data = await a.json();
    console.log(data);
    card_btn.forEach((elem,idx)=>{
        elem.addEventListener('click',(ab)=>{
            
            abc = parseInt(ab.target.id)
            sname = ab.target = data[idx].Music_name;
            singername = ab.target = data[idx].Singer_name;
            imagefile = ab.target = data[idx].Image_filename;
            audiofile = ab.target = data[idx].Audio_filename;
            audio.src = `uplode/${audiofile}`;
            audio.play();
            audio.addEventListener('loadedmetadata',()=>{
                let duration =  audio.duration;
                let min = "0" + Math.floor(duration/60);
                let sec = "0"+ Math.floor(duration - min * 60);
                let calc = min.substr(-2)+ ":" + sec.substr(-2);
                main_duration.innerHTML=calc;
                full_time.innerHTML=`//${calc}//`;
                audio.addEventListener("timeupdate",()=>{
                    // console.log(audio.duration)
                    // console.log(audio.currentTime)
                    duration_value = parseInt((audio.currentTime/ audio.duration) *100);
                    player_duration.value = duration_value;
                   let timeline = Math.round(parseInt(audio.currentTime));
                   timeline_duration.innerHTML = Math.round(parseInt(audio.currentTime))
                    
                   if (timeline <= 9){
                    timeline_duration.innerHTML = `00:0${timeline}`;
                }else{
                    timeline_duration.innerHTML =`00:${timeline}`;
                if(timeline >= 60){
                    let a = Math.floor(audio.currentTime/60);
                    let b = Math.floor(audio.currentTime - a*60)
                    timeline_duration.innerHTML =`0${a}:0${b}`;
                    if(b>=10){
                        timeline_duration.innerHTML=`0${a}:${b}`;
                    }
                    
                }
                }



                })
                player_duration.addEventListener("input",()=>{
                    audio.currentTime = (player_duration.value *audio.duration)/100
                })
                
                
                
            })
            sing.innerHTML = singername;
            song.innerHTML = sname;
            img_container.style.background = `radial-gradient(blue, rgba(0,0,0,0.2)),url('uplode/${imagefile}')`;
            img_container.style.backgroundSize = "cover";
            mini_player_bg.style.background = `radial-gradient(blue, rgba(0,0,0,0.2)),url('uplode/${imagefile}')`;
            mini_player_bg.style.backgroundSize = "cover";
            audio.play();
            player_btn.classList.remove("bx-play-circle");
            player_btn.classList.add("bx-pause-circle");
            music_btn.classList.remove("bx-play-circle");
            music_btn.classList.add("bx-pause-circle");
        })
        next_btn.onclick = () => {
            main++;
            if (main >= data.length){
                main = 0;
            }
            nxt = data[main].Music_name;
            nxt_file = data[main].Image_filename;
            nxt_audio = data[main].Audio_filename;
            audio.src = `uplode/${nxt_audio}`;
            mini_player_bg.style.background = `radial-gradient(blue, rgba(0,0,0,0.2)),url('uplode/${nxt_file}')`;
            mini_player_bg.style.backgroundSize = "cover";
            
            // console.log(nxt,nxt_file,nx)

            
            

        }
        prev_btn.onclick = () => {
            main--;
            prev = data[main].Music_name;
            prev_file = data[main].Image_filename;
            prev_audio = data[main].Audio_filename;
            audio.src = `uplode/${prev_audio}`;
            mini_player_bg.style.background = `radial-gradient(blue, rgba(0,0,0,0.2)),url('uplode/${prev_file}')`;
            mini_player_bg.style.backgroundSize = "cover";
            
            console.log(prev,prev_file,prev_audio)
            
        

            
            

        }
        
    })
}


vol.addEventListener('input',()=>{
    let vol_val = vol.value/100
    console.log(vol_val)
    audio.volume = vol_val;

})
console.log(audio.volume);

fetxh();
