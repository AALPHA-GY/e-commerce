import React, { Component, Fragment } from 'react'
import { Container, Row, Col, Card } from 'react-bootstrap'
import Slider from "react-slick";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";



class HomeSlider extends Component {
    render() {

        var settings = {
            dots: true,
            infinite: true,
            speed: 1500,
            autoplay: true,
            autoplaySpeed: 1500,
            slidesToShow: 1,
            slidesToScroll: 1,
            initialSlide: 0,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        initialSlide: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        };


        return (
            <div>


                <Slider {...settings}>
                    <div>
                        <img className="slider-img" src="https://image.shutterstock.com/image-vector/landing-page-flat-editable-template-600w-1391790392.jpg" />
                    </div>
                    <div>
                        <img className="slider-img" src="https://image.shutterstock.com/image-vector/customer-requirements-ecommerce-onboarding-mobile-600w-2197881079.jpg" />
                    </div>
                    <div>
                        <img className="slider-img" src="https://image.shutterstock.com/image-vector/internet-shopping-set-customers-buying-600w-1643133313.jpg" />
                    </div>

                </Slider>





            </div>
        )
    }
}

export default HomeSlider