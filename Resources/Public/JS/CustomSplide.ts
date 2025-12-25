import { Splide } from '@splidejs/splide';
import { Video } from '@splidejs/splide-extension-video';
import '@splidejs/splide/dist/css/splide.min.css'
import '@splidejs/splide-extension-video/dist/css/splide-extension-video.min.css';
import Alpine from 'alpinejs';


const CustomSplide = () => {

    Alpine.data('customSplide', () => ({

        init() {
            this.$nextTick(() => {

                new Splide(this.$refs.splide, {
                    type: 'loop',
                    perPage: 1,
                }).mount({
                    Video
                })
            })
        },
    }))
}

export default CustomSplide
