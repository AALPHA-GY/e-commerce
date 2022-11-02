import React, {Component} from 'react'

class MegaMenuAll extends Component {
    constructor() {
        super();
        this.MegaMenu = this.MegaMenu.bind(this);
    }

    componentDidMount() {
        this.MegaMenu();
    }


    MegaMenu() {
        var acc = document.getElementsByClassName("accordionAll");
        var accNum = acc.length;
        var i;
        for (i = 0; i < accNum; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px"
                }
            })
        }
    }


    render() {
        return (
            <div className="accordionMenuDivAll">
                <div className="accordionMenuDivInsideAll">


                    <button className="accordionAll">
                        <img className="accordionMenuIconAll"
                             src="https://cdn-icons-png.flaticon.com/128/3917/3917317.png"/>&nbsp; Erkek Giyim
                    </button>
                    <div className="panelAll">
                        <ul>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 1</a></li>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 2</a></li>
                        </ul>
                    </div>

                    <button className="accordionAll">
                        <img className="accordionMenuIconAll"
                             src="https://cdn-icons-png.flaticon.com/128/3917/3917317.png"/>&nbsp; Erkek Giyim
                    </button>
                    <div className="panelAll">
                        <ul>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 1</a></li>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 2</a></li>
                        </ul>
                    </div>


                    <button className="accordionAll">
                        <img className="accordionMenuIconAll"
                             src="https://cdn-icons-png.flaticon.com/128/3917/3917317.png"/>&nbsp; Erkek Giyim
                    </button>
                    <div className="panelAll">
                        <ul>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 1</a></li>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 2</a></li>
                        </ul>
                    </div>


                    <button className="accordionAll">
                        <img className="accordionMenuIconAll"
                             src="https://cdn-icons-png.flaticon.com/128/3917/3917317.png"/>&nbsp; Erkek Giyim
                    </button>
                    <div className="panelAll">
                        <ul>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 1</a></li>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 2</a></li>
                        </ul>
                    </div>


                    <button className="accordionAll">
                        <img className="accordionMenuIconAll"
                             src="https://cdn-icons-png.flaticon.com/128/3917/3917317.png"/>&nbsp; Erkek Giyim
                    </button>
                    <div className="panelAll">
                        <ul>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 1</a></li>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 2</a></li>
                        </ul>
                    </div>


                    <button className="accordionAll">
                        <img className="accordionMenuIconAll"
                             src="https://cdn-icons-png.flaticon.com/128/3917/3917317.png"/>&nbsp; Erkek Giyim
                    </button>
                    <div className="panelAll">
                        <ul>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 1</a></li>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 2</a></li>
                        </ul>
                    </div>


                    <button className="accordionAll">
                        <img className="accordionMenuIconAll"
                             src="https://cdn-icons-png.flaticon.com/128/3917/3917317.png"/>&nbsp; Erkek Giyim
                    </button>
                    <div className="panelAll">
                        <ul>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 1</a></li>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 2</a></li>
                        </ul>
                    </div>


                    <button className="accordionAll">
                        <img className="accordionMenuIconAll"
                             src="https://cdn-icons-png.flaticon.com/128/3917/3917317.png"/>&nbsp; Erkek Giyim
                    </button>
                    <div className="panelAll">
                        <ul>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 1</a></li>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 2</a></li>
                        </ul>
                    </div>


                    <button className="accordionAll">
                        <img className="accordionMenuIconAll"
                             src="https://cdn-icons-png.flaticon.com/128/3917/3917317.png"/>&nbsp; Erkek Giyim
                    </button>
                    <div className="panelAll">
                        <ul>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 1</a></li>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 2</a></li>
                        </ul>
                    </div>


                    <button className="accordionAll">
                        <img className="accordionMenuIconAll"
                             src="https://cdn-icons-png.flaticon.com/128/3917/3917317.png"/>&nbsp; Erkek Giyim
                    </button>
                    <div className="panelAll">
                        <ul>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 1</a></li>
                            <li><a href="#" className="accordionItemAll"> Erkek Tshirt 2</a></li>
                        </ul>
                    </div>


                </div>

            </div>
        )
    }
}

export default MegaMenuAll