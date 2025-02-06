import "./client.categories-cta.css";
import image from "../../../assets/images/cta-image.png";
export default function CategoriesCta() {
  return (
    <section className="categories-cta-section">
      <div className="cta-content">
        <div className="left">
          <h3>Browse Our Fashion Paradise!</h3>
          <p>
            Step into a world of style and explore our diverse collection of
            clothing categories.
          </p>
          <a href="" className="btn">
            Start Browsing <i className="fa-solid fa-arrow-right"></i>
          </a>
        </div>
        <div className="right">
          <div className="image">
            <img src={image} alt="" />
          </div>
        </div>
      </div>
    </section>
  );
}
