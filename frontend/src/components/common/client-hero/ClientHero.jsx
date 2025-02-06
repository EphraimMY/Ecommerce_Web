import iconImage from "../../../assets/images/heroimage.png";
import iconEtoile from "../../../assets/icons/burst-pucker.svg";
import "./client.hero.css";
export default function ClientHero() {
  return (
    <section className="hero-section">
      <div className="left">
        <h3>Fresh Arrival Online</h3>
        <p>Discover our Newest Collection Today</p>
        <a href="">
          View Collection <i className="fa-solid fa-arrow-right"></i>
        </a>
      </div>
      <div className="right">
        <div className="etoile">
          <img src={iconEtoile} alt="" />
        </div>
        <div className="circle">
          <div className="image">
            <img src={iconImage} alt="" />
          </div>
        </div>
      </div>
    </section>
  );
}
