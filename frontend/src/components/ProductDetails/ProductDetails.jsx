import React, {Component, Fragment} from 'react'
import {Container, Row, Col, Form, Button} from 'react-bootstrap'
import Product1 from '../../assets/images/product/product1.png'
import Product2 from '../../assets/images/product/product2.png'
import Product3 from '../../assets/images/product/product3.png'
import Product4 from '../../assets/images/product/product4.png'

class ProductDetails extends Component {
    render() {
        return (
            <Fragment>
                <Container  fluid={true} className="BetweenTwoSection">
                    <Row className="p-2">
                        <Col className="shadow-sm bg-white pb-3 mt-4" md={12} lg={12} sm={12} xs={12}>
                            <Row>
                                <Col className="p-3" md={6} lg={6} sm={12} xs={12}>
                                    <img className="w-100" src={Product1}/>
                                    <Container className="my-3">
                                        <Row>
                                            <Col className="p-0 m-0" md={3} lg={3} sm={3} xs={3}>
                                                <img className="w-100" src={Product1}/>
                                            </Col>
                                            <Col className="p-0 m-0" md={3} lg={3} sm={3} xs={3}>
                                                <img className="w-100" src={Product2}/>
                                            </Col>
                                            <Col className="p-0 m-0" md={3} lg={3} sm={3} xs={3}>
                                                <img className="w-100" src={Product3}/>
                                            </Col>
                                            <Col className="p-0 m-0" md={3} lg={3} sm={3} xs={3}>
                                                <img className="w-100" src={Product4}/>
                                            </Col>
                                        </Row>
                                    </Container>
                                </Col>
                                <Col className="p-3 " md={6} lg={6} sm={12} xs={12}>
                                    <h5 className="Product-Name">ASUS TUF A15 FA506IU Ryzen 7 4800H GTX</h5>
                                    <h6 className="section-sub-title">??zel Koleksiyonlar??m??zdan Baz??lar??, Bunlar?? Da
                                    Be??enebilirsiniz</h6>
                                    <div className="input-group">
                                        <div className="Product-price-card d-inline ">Normal Fiyat 200???</div>
                                        <div className="Product-price-card d-inline ">50% ??ndirim</div>
                                        <div className="Product-price-card d-inline ">Yeni Fiyat 100???</div>
                                    </div>
                                    <h6 className="mt-2">Renk Se??in</h6>
                                    <div className="input-group">
                                        <div className="form-check mx-1">
                                            <input className="form-check-input" type="radio" name="exampleRadios"
                                                   id="exampleRadios1" value="option1"/>
                                            <label className="form-check-label" htmlFor="exampleRadios1">Black</label>
                                        </div>
                                        <div className="form-check mx-1">
                                            <input className="form-check-input" type="radio" name="exampleRadios"
                                                   id="exampleRadios1" value="option1"/>
                                            <label className="form-check-label" htmlFor="exampleRadios1">Green</label>
                                        </div>
                                        <div className="form-check mx-1">
                                            <input className="form-check-input" type="radio" name="exampleRadios"
                                                   id="exampleRadios1" value="option1"/>
                                            <label className="form-check-label" htmlFor="exampleRadios1">Red</label>
                                        </div>
                                    </div>

                                    <h6 className="mt-2">Boyut Se??in</h6>
                                    <div className="input-group">
                                        <div className="form-check mx-1">
                                            <input className="form-check-input" type="radio" name="exampleRadios"
                                                   id="exampleRadios1" value="option1"/>
                                            <label className="form-check-label" htmlFor="exampleRadios1">X</label>
                                        </div>
                                        <div className="form-check mx-1">
                                            <input className="form-check-input" type="radio" name="exampleRadios"
                                                   id="exampleRadios1" value="option1"/>
                                            <label className="form-check-label" htmlFor="exampleRadios1">XX</label>
                                        </div>
                                        <div className="form-check mx-1">
                                            <input className="form-check-input" type="radio" name="exampleRadios"
                                                   id="exampleRadios1" value="option1"/>
                                            <label className="form-check-label" htmlFor="exampleRadios1">XXXX</label>
                                        </div>
                                    </div>

                                    <h6 className="mt-2">Miktar</h6>
                                    <input className="form-control text-center w-50" type="number"/>

                                    <div className="input-group mt-3">
                                        <button className="btn site-btn m-1 "><i
                                            className="fa fa-shopping-cart"></i> Sepete Ekle
                                        </button>
                                        <button className="btn btn-primary m-1"><i className="fa fa-car"></i>
                                            Sipari??i Tamamla
                                        </button>
                                        <button className="btn btn-primary m-1"><i
                                            className="fa fa-heart"></i> Favorilere Ekle
                                        </button>
                                    </div>
                                </Col>
                            </Row>

                            <Row>
                                <Col className="" md={6} lg={6} sm={12} xs={12}>
                                    <h6 className="mt-2">??r??n Detaylar??</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                        minim veniam, quis nostrud exerci tation Lorem ipsum dolor sit amet,
                                        consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                        dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                        exerci tation</p>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                        minim veniam, quis nostrud exerci tation Lorem ipsum dolor sit amet,
                                        consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet
                                        dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
                                        exerci tation</p>
                                </Col>

                                <Col className="" md={6} lg={6} sm={12} xs={12}>
                                    <h6 className="mt-2">YORUMLAR</h6>
                                    <p className=" p-0 m-0"><span className="Review-Title">Batuhan Yegin</span> <span
                                        className="text-success"><i className="fa fa-star"></i> <i
                                        className="fa fa-star"></i> <i className="fa fa-star"></i> <i
                                        className="fa fa-star"></i> </span></p>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

                                    <p className=" p-0 m-0"><span className="Review-Title">Batuhan Yegin</span> <span
                                        className="text-success"><i className="fa fa-star"></i> <i
                                        className="fa fa-star"></i> <i className="fa fa-star"></i> <i
                                        className="fa fa-star"></i> </span></p>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

                                    <p className=" p-0 m-0"><span className="Review-Title">Batuhan Yegin</span> <span
                                        className="text-success"><i className="fa fa-star"></i> <i
                                        className="fa fa-star"></i> <i className="fa fa-star"></i> <i
                                        className="fa fa-star"></i> </span></p>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>

                                </Col>
                            </Row>

                        </Col>
                    </Row>
                </Container>

            </Fragment>
        )
    }
}

export default ProductDetails