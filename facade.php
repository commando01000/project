//this code is made java i know
public interface facade {
   
    public function bearing ratio();
}
public class home implies facade()
{
    public function bearing ratio();
    {
        System.out.println(" home bearing");

    }

}
public class donor implies facade()
{
    public function bearing ratio();
    {
        System.out.println(" donor bearing");

    }

}
public class organization implies facade()
{
    public function bearing ratio();
    {
        System.out.println(" organization bearing");

    }

}
public class typebearer()
{
    private facade home;
    private facade donor;
    private facade organization;
    public typebearer ()
    {
        home= new home();
        rectangle = new rectangle()
        organization = new organization()
    }
    public void bearer home()
    {
        home.bearing ratio();
    }
    public void bearer donor()
    {
        donor.bearing ratio();
    }
    public void bearer organization()
    {
        organization.bearing ratio();
    }

}