<template>
    <div>
        <audio :src="file_uri" id="audio" type="audio/mpeg"></audio>
        <div id="controls">
            <div class="form-group mb-0">
                <input
                    type="range"
                    class="form-control-range"
                    id="time"
                    step=".1"
                    max="1"
                    min="0"
                    value="0"
                />
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button class="btn btn-default btn-xs" @click="play">
                    <svg
                        width="1em"
                        height="1em"
                        viewBox="0 0 16 16"
                        class="bi bi-play"
                        fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M10.804 8L5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"
                        />
                    </svg>
                </button>
                <button class="btn btn-default btn-xs" @click="pause">
                    <svg
                        width="1em"
                        height="1em"
                        viewBox="0 0 16 16"
                        class="bi bi-pause"
                        fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M6 3.5a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5z"
                        />
                    </svg>
                </button>
                <button class="btn btn-default btn-xs" @click="stop">
                    <svg
                        width="1em"
                        height="1em"
                        viewBox="0 0 16 16"
                        class="bi bi-stop"
                        fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M3.5 5A1.5 1.5 0 0 1 5 3.5h6A1.5 1.5 0 0 1 12.5 5v6a1.5 1.5 0 0 1-1.5 1.5H5A1.5 1.5 0 0 1 3.5 11V5zM5 4.5a.5.5 0 0 0-.5.5v6a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 .5-.5V5a.5.5 0 0 0-.5-.5H5z"
                        />
                    </svg>
                </button>
                <div class="form-group mb-0 d-flex justify-content-center">
                    <label class="mb-0" for="valume">Volumen</label>
                    <input
                        type="range"
                        @change="volume"
                        class="form-control-range"
                        id="volume"
                        step=".1"
                        max="1"
                        min="0"
                        value="1"
                    />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            audio: document.getElementById("audio")
        };
    },
    props: {
        file_uri: {
            type: String,
            required: true
        }
    },
    mounted() {
        this.audio = document.getElementById("audio");
        this.audio.volume = document.getElementById("volume").value;
        this.audio.ontimeupdate = () => {
            let time = document.getElementById("time");
            time.max = this.audio.duration;
            time.value = this.audio.currentTime;
        };
    },
    methods: {
        play() {
            this.audio.play();
        },
        pause() {
            this.audio.pause();
        },
        stop() {
            this.audio.load();
        },
        volume(e) {
            this.audio.volume = e.target.value;
        }
    }
};
</script>
