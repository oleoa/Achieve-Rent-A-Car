class Carousel
{
  id;
  nuts;
  carouselSlide;
  carouselLength;
  prevBtn;
  nextBtn;
  counter;
  automation;

  constructor(id, nuts)
  {
    // Set the id of the carousel
    this.id = id;

    // Set the nuts of the carousel
    this.nuts = nuts;

    // Get the carousel slide, the length of the carousel, the previous and next buttons and the counter
    this.carouselSlide = document.querySelector('#carousel-slide-'+this.id);

    // If the carousel slide does not exist, return
    if(!this.carouselSlide)
      return;

    this.carouselLength = (this.carouselSlide.children.length - 1);
    this.prevBtn = document.getElementById('prevBtn-'+this.id);
    this.nextBtn = document.getElementById('nextBtn-'+this.id);
    this.counter = 0;

    // Update the width of the carousel
    this.updateWidth();
    window.addEventListener('resize', this.updateWidth.bind(this));
  }

  updateWidth()
  {
    // Get the width of the carousel
    var setWidthScreen = document.getElementById('setWidthScreen');

    // Set the width of the carousel to 0px
    setWidthScreen.style.width = '0px';

    // Get the width of the div above the carousel
    var widthScreen = document.getElementById('divAboveWidth').offsetWidth;

    // Set the width of the carousel to the width of the div above the carousel
    setWidthScreen.style.width = widthScreen+'px';
  }

  addSlideAtuomatic()
  {
    // Set an interval to move the carousel every 3 seconds
    this.automation = setInterval(this.slideNext.bind(this), this.nuts);
  }

  slideNext()
  {
    // If the counter is greater than or equal to the length of the carousel, it means it is in the last slide
    if (this.counter >= this.carouselLength){

      // Set the counter to 0
      this.counter = 0;

      // Move the carousel to the first slide
      this.carouselSlide.style.transform = 'translateX(0%)';

      // Paint the first indicator
      this.paintIndicator(this.counter);

      // Return to avoid the next line of code to be executed
      return;
    }

    // Move the carousel to the next slide
    this.counter++;

    // Move the carousel to the next slide
    this.carouselSlide.style.transform = 'translateX(' + (-100 * this.counter) + '%)';

    // Paint the indicator
    this.paintIndicator(this.counter);
  }

  slidePrev()
  {
    // If the counter is less than or equal to 0, it means it is in the first slide
    if (this.counter <= 0){

      // Set the counter to the last slide
      this.counter = this.carouselLength;

      // Move the carousel to the last slide
      this.carouselSlide.style.transform = 'translateX(' + (-100 * (this.carouselSlide.children.length-1)) + '%)';

      // Paint the last indicator
      this.paintIndicator(this.counter);

      // Return to avoid the next line of code to be executed
      return;
    }

    // Move the carousel to the previous slide
    this.counter--;

    // Move the carousel to the previous slide
    this.carouselSlide.style.transform = 'translateX(' + (-100 * this.counter) + '%)';

    // Paint the indicator
    this.paintIndicator(this.counter);
  }

  clickedNext()
  {
    // Clear the interval
    clearInterval(this.automation);

    // Call the slideNext method
    this.slideNext();
  }

  clickedPrev()
  {
    // Clear the interval
    clearInterval(this.automation);

    // Call the slidePrev method
    this.slidePrev();
  }

  addArrows()
  {
    // Add event listeners to the next and previous buttons
    this.nextBtn.addEventListener('click', this.clickedNext.bind(this));
    this.prevBtn.addEventListener('click', this.clickedPrev.bind(this));
  }

  addIndicators()
  {
    // Paint the first indicator
    this.paintIndicator(0);

    // Add event listeners to the indicators
    for(var i = 0; i <= this.carouselLength; i++){
      var indicator = document.getElementById('carousel-'+i+'-indicator-'+this.id);
      indicator.addEventListener('click', this.slideIndicator.bind(this));
    }
  }

  slideIndicator(indicator)
  {
    // Clear the interval
    clearInterval(this.automation);

    // Get the index of the indicator clicked
    var index = indicator.target.id.split('-')[1];

    // Set the counter to the index of the indicator clicked
    this.counter = index;

    // Paint the indicator
    this.paintIndicator(index);

    // Move the carousel to the index of the indicator clicked
    this.carouselSlide.style.transform = 'translateX(' + (-100 * this.counter) + '%)';
  }

  paintIndicator(index)
  {
    // Paint all indicators white
    for(var i = 0; i <= this.carouselLength; i++){
      var indicatorClear = document.getElementById('carousel-'+i+'-indicator-'+this.id);
      indicatorClear.style.backgroundColor = 'rgb(255, 255, 255)';
    }

    // Paint the selected indicator yellow
    var indicator = document.getElementById('carousel-'+index+'-indicator-'+this.id);
    indicator.style.backgroundColor = 'rgb(255, 215, 0)';
  }
}

const isHome = document.getElementById('home-page');
if(isHome)
{
  const reviews = new Carousel('reviews', 3000);
  reviews.addSlideAtuomatic();
  reviews.addArrows();
  reviews.addIndicators();

  const banner = new Carousel('banner', 5000);
  banner.addSlideAtuomatic();
  banner.addIndicators();
}
