const SliderWritter = {
    init() {
        const title = document.getElementById('slider-title');
        const subtitle = document.getElementById('slider-subtitle');

        if(title && subtitle){
            const titleWritter = new Typewriter(title, {cursor: ''});
            const subtitleWritter = new Typewriter(subtitle, {cursor: ''});

            titleWritter
                .typeString('I am a designer.')
                .pauseFor(1000)
                .deleteChars(7)
                .pauseFor(100)
                .typeString('veloper.')
                .pauseFor(700)
                .deleteChars(12)
                .pauseFor(70)
                .typeString('Gotrecillo.')
                .start();

            subtitleWritter
                .pauseFor(10000)
                .typeString('I can help you making your ideas into real products')
                .start();
        }
    }
};

export default SliderWritter;
