public abstract class treatmentcost
{
  
  string discrip ="donor";
  public string getbearmoney ()
  {
    return coast;
  }
  poublic abstract pay()
}
public abstract class decorator extends treatmentcost
{
    public abstract string getcoast();
}
public class total extends treatmentcost
{
    public total()
    {
        discrip= "total";
    }
    public pay()
    {
        return 900;
    }

}

public class church extends decorator
{
    treatmentcost x;
    public church(treatmentcost x)
    {
        this.x=beverage
    }
    public pay()
    {
        return x.cost()- 150;
    }

}

public class home extends decorator
{
    treatmentcost x;
    public home(treatmentcost x)
    {
        this.x=beverage
    }
    public pay()
    {
        return x.cost()- 250;
    }

}