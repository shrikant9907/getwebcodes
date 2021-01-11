.popup-mask,
.popup-ui {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 999999;
}

.popup-mask {
  position: absolute !important;
  background: rgba(0, 0, 0, 0.3);
  display: flex;
  justify-content: center;
  align-items: center;
}

.popup-box {
  background: #ffffff;
  width: 400px;
  max-width: 90%;
  display: block;
  margin: 0 auto;    
  padding: 40px 25px;
  position: relative;
  border-radius: 4px;
}

.popup-box h3 {
  margin-bottom: 20px;
  margin-top: 0px;
}

.popup-box p {
  margin-bottom: 30px;
}

.popup-box .popup-close {
  position: absolute;
  right: 0px;
  top: 0px;
  width: 40px;
  line-height: 40px;
  text-align: center;
  cursor: pointer;
  font-size: 20px;
  font-weight: bold;
}

.popup-actions {
  text-align: center;
}

.popup-actions .popup-btn {
  padding: 10px 20px;
  background-color: #00ff00;
  text-decoration: none;
  color: #000000;
  margin: 0 5px;
}