import React, {Component, Fragment} from 'react'
import {Col, Container, Row} from 'react-bootstrap'
import { Link } from 'react-router-dom'
import Apple from '../../assets/images/apple.png'
import Google from '../../assets/images/google.png'
class FooterDesktop extends Component {
    render() {
        return (
            <Fragment>
                <div className="footerback m-0 mt-5 pt-3 shadow-sm">
                    <Container>
                        <Row className="px-0 my-5">
                            <Col className="p-2" lg={3} md={3} sm={6} xs={12}>
                                <h5 className="footer-menu-title">OFİS ADRESİ</h5>
                                <p>Başharık, Mehmet Akif Ersoy Cd. No:77, 44200 Malatya Merkez/Malatya<br></br>
                                    Email: batuhanyegin23@gmail.com
                                </p>
                                <h5 className="footer-menu-title">SOSYAL MEDYA</h5>
                                <a href=""><i className="fab m-1 h4 fa-facebook"></i></a>
                                <a href="https://www.instagram.com/yeginbatuhan/"><i className="fab m-1 h4 fa-instagram"></i></a>
                                <a href=""><i className="fab m-1 h4 fa-twitter"></i></a>
                            </Col>

                            <Col className="p-2" lg={3} md={3} sm={6} xs={12}>
                                <h5 className="footer-menu-title">ŞİRKET</h5>
                                <Link to="/" className="footer-link"> Hakkında</Link><br></br>
                                <Link to="/" className="footer-link"> Şirket Profili</Link><br></br>
                                <Link to="/contact" className="footer-link"> İletişim</Link><br></br>
                            </Col>

                            <Col className="p-2" lg={3} md={3} sm={6} xs={12}>
                                <h5 className="footer-menu-title">S.S.S</h5>
                                <Link to="/purchase" className="footer-link">Nasıl Satın Alınır</Link><br></br>
                                <Link to="/privacy" className="footer-link"> Gizlilik Politikası</Link><br></br>
                                <Link to="/refund" className="footer-link"> Geri Ödeme Politikası </Link><br></br>
                            </Col>

                            <Col className="p-2" lg={3} md={3} sm={6} xs={12}>
                                <h5 className="footer-menu-title">UYGULAMAMIZI İNDİRİN</h5>
                                <a><img src={Google}  /></a><br></br>
                                <a><img className="mt-2" src={Apple}  /></a><br></br>
                            </Col>

                        </Row>
                    </Container>

                </div>

            </Fragment>
        )
    }
}

export default FooterDesktop
