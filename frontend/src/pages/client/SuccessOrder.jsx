import BreadCrumb from "../../components/common/bread-crumb/BreadCrumb";
import ClientFooter from "../../components/common/client-footer/ClientFooter";
import ClientHeader from "../../components/common/client-header/ClientHeader";
import AfterOrderMessage from "../../components/common/after-order-message/AfterOrderMessage";
export default function SuccessOrder() {
  return (
    <>
      <ClientHeader />
      <BreadCrumb page="Successful Order" color="var(--green-100)" />
      <AfterOrderMessage
        type="success"
        title="Thank you for shopping"
        message="Your order has been successfully placed and is now being processed."
      />
      <ClientFooter />
    </>
  );
}
