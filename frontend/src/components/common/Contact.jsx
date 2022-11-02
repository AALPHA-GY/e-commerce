import React, {Component, Fragment} from 'react'
import {Container, Row, Col, Form, Button} from 'react-bootstrap'


export class Contact extends Component {
    render() {
        return (
            <Fragment>
                <Container>
                    <Row className="p-2">
                        <Col className="shadow-sm bg-white mt-2" md={12} lg={12} sm={12} xs={12}>

                            <Row className="text-center">
                                <Col className="d-flex justify-content-center" md={6} lg={6} sm={12} xs={12}>
                                    <Form className="onboardForm">
                                        <h4 className="section-title-login">BİZİMLE İLETİŞİME GEÇİN </h4>
                                        <h6 className="section-sub-title">Lütfen Bizimle İletişime Geçin </h6>
                                        <input className="form-control m-2" type="text"
                                               placeholder="Lütfen Telefon Numaranızı Girin"/>

                                        <input className="form-control m-2" type="email"
                                               placeholder="Email Adresinizi Girin"/>

                                        <input className="form-control m-2" type="text"
                                               placeholder="Mesajınızı Yazın"/>
                                        <Button className="btn btn-block m-2 site-btn-login"> Gönder </Button>

                                    </Form>


                                </Col>

                                <Col className="p-0 Desktop m-0" md={6} lg={6} sm={6} xs={6}>
                                    <br></br><br></br>
                                    <p className="section-title-contact">
                                        Başharık, Mehmet Akif Ersoy Cd. No:77, 44200 Malatya Merkez/Malatya
                                        Email: batuhanyegin23@gmail.com
                                    </p>

                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3129.59679316623!2d38.309311950923366!3d38.335166979561535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4076312d98d78015%3A0xeb8dc6b24ae935c5!2zQmHFn2hhcsSxayBNaXJhw6cgQ2FtaQ!5e0!3m2!1str!2str!4v1667362864040!5m2!1str!2str"
                                        width="550" height="450" styles="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>

                                </Col>
                            </Row>


                        </Col>
                    </Row>
                </Container>
            </Fragment>
        )
    }
}

export default Contact