import React, { Component, Fragment } from 'react'
import { Container,Row,Col, Card,Button,Modal } from 'react-bootstrap'
class Notification extends Component {

    constructor(){
        super();
        this.state={
            show:false,
        }
    }

    handleClose = () =>{
        this.setState({ show:false})
    };

    handleShow = () => {
        this.setState({ show:true })
    };

    render() {
        return (
            <Fragment>

                <Container className="TopSection">
                    <Row>
                        <Col className=" p-1 " md={6} lg={6} sm={12} xs={12}>
                            <Card onClick={this.handleShow} className="notification-card">
                                <Card.Body>
                                    <h6> Lorem Ipsum is simply dummy text of the printing</h6>
                                    <p className="py-1  px-0 text-primary m-0"><i className="fa  fa-bell"></i>   Tarih: 02/11/2022 | Durumu: Okunmadı</p>
                                </Card.Body>
                            </Card>
                        </Col>

                        <Col className=" p-1 " md={6} lg={6} sm={12} xs={12}>
                            <Card onClick={this.handleShow} className="notification-card">
                                <Card.Body>
                                    <h6> Lorem Ipsum is simply dummy text of the printing</h6>
                                    <p className="py-1   px-0 text-primary m-0"><i className="fa  fa-bell"></i>  Tarih: 02/11/2022 | Durumu: Okunmadı</p>
                                </Card.Body>
                            </Card>
                        </Col>

                        <Col className="p-1" md={6} lg={6} sm={12} xs={12}>
                            <Card  className="notification-card">
                                <Card.Body>
                                    <h6> Lorem Ipsum is simply dummy text of the printing</h6>
                                    <p className="py-1  px-0 text-success m-0"><i className="fa  fa-bell"></i>   Tarih: 02/11/2022 | Durumu: Okundu</p>
                                </Card.Body>
                            </Card>

                        </Col>

                        <Col className="p-1" md={6} lg={6} sm={12} xs={12}>

                            <Card className="notification-card">
                                <Card.Body>
                                    <h5> Lorem Ipsum is simply dummy text of the printing</h5>
                                    <p className="py-1  px-0 text-success m-0"><i className="fa fa-bell"></i>  Tarih: 02/11/2022 | Durumu: Okundu</p>
                                </Card.Body>
                            </Card>

                        </Col>

                        <Col className="p-1" md={6} lg={6} sm={12} xs={12}>

                            <Card className="notification-card">
                                <Card.Body>
                                    <h6> Lorem Ipsum is simply dummy text of the printing</h6>
                                    <p className="py-1  px-0 text-success m-0"><i className="fa  fa-bell"></i>   Tarih: 02/11/2022 | Durumu: Okundu</p>
                                </Card.Body>
                            </Card>

                        </Col>

                        <Col className="p-1" md={6} lg={6} sm={12} xs={12}>

                            <Card className="notification-card">
                                <Card.Body>
                                    <h6> Lorem Ipsum is simply dummy text of the printing</h6>
                                    <p className="py-1 px-0 text-success m-0"><i className="fa  fa-bell"></i>   Tarih: 02/11/2022 | Durumu: Okundu</p>
                                </Card.Body>
                            </Card>

                        </Col>

                    </Row>
                </Container>


                <Modal show={this.state.show} onHide={this.handleClose}>
                    <Modal.Header closeButton>
                        <h6><i className="fa fa-bell"></i> Tarih:11/05/2021</h6>
                    </Modal.Header>
                    <Modal.Body>
                        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry!</h6>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum
                        </p>



                    </Modal.Body>
                    <Modal.Footer>
                        <Button variant="secondary" onClick={this.handleClose}>
                            Kapat
                        </Button>

                    </Modal.Footer>
                </Modal>



            </Fragment>
        )
    }
}
export default Notification