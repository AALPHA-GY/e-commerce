import React, {Component, Fragment} from 'react'
import {Navbar, Container, Row, Col, Button, Card} from 'react-bootstrap';
import Product1 from '../../assets/images/product/product1.png'

class Cart extends Component {
    render() {
        return (
            <Fragment>

                <Container >

                    <div className="section-title text-center mb-55"><h2>Siparişe Eklenen Ürünler</h2>
                    </div>


                    <Row>


                        <Col className="p-1" lg={12} md={12} sm={12} xs={12}>
                            <Card>
                                <Card.Body>
                                    <Row>
                                        <Col md={3} lg={3} sm={6} xs={6}>
                                            <img className="cart-product-img" src={Product1}/>
                                        </Col>

                                        <Col md={6} lg={6} sm={6} xs={6}>
                                            <h5 className="product-name">ASUS TUF A15 FA506IU Ryzen 7 4800H GTX</h5>
                                            <h6> Miktar = 5 </h6>
                                            <h6>Fiyat = 5 x 100 = 500₺</h6>
                                        </Col>

                                        <Col md={3} lg={3} sm={12} xs={12}>
                                            <input placeholder="2" className="form-control text-center" type="number"/>
                                            <Button className="btn btn-block w-100 mt-3  site-btn"><i
                                                className="fa fa-trash-alt"></i> Kaldır </Button>

                                        </Col>
                                    </Row>
                                </Card.Body>
                            </Card>
                        </Col>


                        <Col className="p-1" lg={12} md={12} sm={12} xs={12}>
                            <Card>
                                <Card.Body>
                                    <Row>
                                        <Col md={3} lg={3} sm={6} xs={6}>
                                            <img className="cart-product-img" src={Product1}/>
                                        </Col>

                                        <Col md={6} lg={6} sm={6} xs={6}>
                                            <h5 className="product-name">ASUS TUF A15 FA506IU Ryzen 7 4800H GTX</h5>
                                            <h6> Miktar = 5 </h6>
                                            <h6>Fiyat = 5 x 100 = 500₺</h6>
                                        </Col>

                                        <Col md={3} lg={3} sm={12} xs={12}>
                                            <input placeholder="2" className="form-control text-center" type="number"/>
                                            <Button className="btn btn-block w-100 mt-3  site-btn"><i
                                                className="fa fa-trash-alt"></i> Kaldır </Button>

                                        </Col>
                                    </Row>
                                </Card.Body>
                            </Card>
                        </Col>


                        <Col className="p-1" lg={12} md={12} sm={12} xs={12}>
                            <Card>
                                <Card.Body>
                                    <Row>
                                        <Col md={3} lg={3} sm={6} xs={6}>
                                            <img className="cart-product-img" src={Product1}/>
                                        </Col>

                                        <Col md={6} lg={6} sm={6} xs={6}>
                                            <h5 className="product-name">ASUS TUF A15 FA506IU Ryzen 7 4800H GTX</h5>
                                            <h6> Miktar = 5 </h6>
                                            <h6>Fiyat = 5 x 100 = 500₺</h6>
                                        </Col>

                                        <Col md={3} lg={3} sm={12} xs={12}>
                                            <input placeholder="2" className="form-control text-center" type="number"/>
                                            <Button className="btn btn-block w-100 mt-3  site-btn"><i
                                                className="fa fa-trash-alt"></i> Kaldır </Button>

                                        </Col>
                                    </Row>
                                </Card.Body>
                            </Card>
                        </Col>


                        <Col className="p-1" lg={12} md={12} sm={12} xs={12}>
                            <Card>
                                <Card.Body>
                                    <Row>
                                        <Col md={3} lg={3} sm={6} xs={6}>
                                            <img className="cart-product-img" src={Product1}/>
                                        </Col>

                                        <Col md={6} lg={6} sm={6} xs={6}>
                                            <h5 className="product-name">ASUS TUF A15 FA506IU Ryzen 7 4800H GTX</h5>
                                            <h6> Miktar = 5 </h6>
                                            <h6>Fiyat = 5 x 100 = 500₺</h6>
                                        </Col>

                                        <Col md={3} lg={3} sm={12} xs={12}>
                                            <input placeholder="2" className="form-control text-center" type="number"/>
                                            <Button className="btn btn-block w-100 mt-3  site-btn"><i
                                                className="fa fa-trash-alt"></i> Kaldır </Button>

                                        </Col>
                                    </Row>
                                </Card.Body>
                            </Card>
                        </Col>


                        <Col className="p-1" lg={12} md={12} sm={12} xs={12}>
                            <Card>
                                <Card.Body>
                                    <Row>


                                        <Col md={4} lg={4} sm={6} xs={6}>

                                            <h5> Toplam Sipariş = 5 </h5>
                                            <h5>Toplam Tutar = 2500₺</h5>
                                            <Button className="btn btn-block w-100 mt-3  site-btn"><i
                                                className="fa fa-shopping-cart"></i> Ödeme </Button>
                                        </Col>
                                    </Row>
                                </Card.Body>
                            </Card>
                        </Col>

                    </Row>

                </Container>


            </Fragment>
        )
    }
}

export default Cart