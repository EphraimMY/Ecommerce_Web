import BestSelling from "../../components/common/best-selling/BestSelling";
import ClientHeader from "../../components/common/client-header/ClientHeader";
import ClientHero from "../../components/common/client-hero/ClientHero";
import freeShepping from "../../assets/icons/Delivery.svg";
import satisfaction from "../../assets/icons/Star Badge.svg";
import secure from "../../assets/icons/Shield Check.svg";
import BestSeller from "../../components/common/best-seller/BestSeller";
import CategoriesCta from "../../components/common/categories-cta/CategoriesCta";
import ProductList from "../../components/common/product-list/ProductList";
import ClientFooter from "../../components/common/client-footer/ClientFooter";

export default function Home() {
  const dataSelling = [
    {
      title: "Free Shipping",
      description:
        "Upgrade your style today and get FREE shipping on all orders! Don't miss out.",
      icon: freeShepping,
    },
    {
      title: "Satisfaction Guarantee",
      description:
        "Shop confidently with our Satisfaction Guarantee: Love it or get a refund.",
      icon: satisfaction,
    },
    {
      title: "Secure Payment",
      description:
        "Your security is our priority. Your payments are secure with us.",
      icon: secure,
    },
  ];
  return (
    <>
      <ClientHeader />
      <ClientHero />
      <BestSelling data={dataSelling} />
      <BestSeller />
      <CategoriesCta />
      <ProductList />
      <ClientFooter />
    </>
  );
}
